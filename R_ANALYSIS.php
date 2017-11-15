<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<style> 
label{
		font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	<!--font-weight: bold;-->
    display: block;
    color: black;
    <!--text-align: center;-->
    padding: 20px 36px;
    text-decoration: none;
}

.textbox3
{
	font-size: 18px;
	background-color:transparent;
	border:0px solid;
	color:red;
	width:110px;
	height:30px;
}




div {
    border-radius: 2px;
	border: 4px solid #73AD21;
    <!--background-color: #de8d66;-->
    background-position: left top;
    background-repeat: repeat;
     padding-left:.2px;
     padding-right:.2px;
	 padding-top:35px;
    width: 450px;
    height: 350px;
}

.textbox{
    width: 70%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}



.textbox:focus {
    background-color: lightblue;
}



input#gobutton{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
input#gobutton:hover, input#gobutton:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

#l1
{
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	font-weight: bold;
    display: block;
    color: black;
    <!--text-align: center;-->
    padding: 20px 36px;
    text-decoration: none;
}
#h_textbox3
{
	font-size: 20px;
	background-color:transparent;
	border:0px solid;
	color:blue;
	width:110px;
	height:30px;
}

h1 {
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 50px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 36.4px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #c0c0ee;
}

li {
    float: left;
}

li a {
		font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	font-weight: 650;
    display: block;
    color: #666;
    text-align: center;
    padding: 20px 30px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}


li:last-child {
    border-right: none;
}

li a.active {
    color: white;
    background-color: #E9967A;
}

#t2
{
	border: 4px solid #73AD21;
    background-color: #de8d66;
}

textarea
{
	font-size:22px;
}

#h_textbox{
    width: 80%;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
}



#h_textbox2{
    width: 80%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: green;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
}

#h_textbox:focus {
    background-color: lightblue;
}

body
{
    background: url(2.jpg);
    background-size: 1360px 670px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
error_reporting(0);
session_start();
	if(!isset($_SESSION['name']))
	{
		echo "<script>alert('PLEASE LOGIN FIRST');</script>";
        //echo "window.location='MAIN_PAGE.php'";
		header("Location: MAIN_PAGE.php");
	}
	
$server="localhost";
$username="root";
$password="";
$dbname="cis";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
	{
		die('could not connect'.mysql_error());
	}
else
	{
		
		$product_id = $branch_id = $report = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(isset($_POST['submit']))
			{
				if (empty($_POST["p_id"]))
				{
				echo "<script>alert('PRODUCT ID Required!!!!');</script>";
				//$pc_error = "Required";
				}
				else if(empty($_POST["b_id"]))
				{
				echo "<script>alert('BRANCH CODE Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(!preg_match("/^[0-9]*$/",($_POST["p_id"])))
				{
				echo "<script>alert('Enter only Digits!!!!');</script>";
				}
				else if(!preg_match("/^[0-9]*$/",($_POST["b_id"])))
				{
				echo "<script>alert('Enter only Digits!!!!');</script>";
				}
				else
				{
					//$gpr = "10%";
					$product_id = test_input($_POST['p_id']);
					$branch_id = test_input($_POST['b_id']);
			
					$sql = "SELECT * from report where p_id = '$product_id' and b_id='$branch_id'";
					$result = mysqli_query($conn,$sql);
					if($result)
					{
						while($row2 = $result->fetch_assoc())
						{
						$product_id = $row2['p_id'];
						$branch_id = $row2['b_id'];
						$report = $row2['report'];
						}		
					}
					else
					{
					echo "<script>alert('ERROR IN GENERATING REPORTS!!!!');</script>";
					}
				}

			}
			
			else
			{
				
			}
			
		}
	}
	
	
	
function test_input($data)
{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}
?>
<center>
<ul>
  <li><a href="B_MANAGER.php">SALES BUDGET</a></li>
  <li><a href="P_L.php">PRODUCT LIST</a></li>
  <li><a href="VARIANCE.php">VARIANCE</a></li>
  <li><a href="C_ANALYSIS.php">COMAPARATIVE ANALYSIS</a></li>
  <li><a href="R_ANALYSIS.php">REPORTS</a></li>
  <li style="float:right"><a href="LOGOUT.php">LOG OUT</a></li>
</ul> 
</br>
</br>
</br>
</br>
</br>
</br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<table cellspacing="1" bgcolor="solid #de8d66" id="t2" >
<tr align="left">
<td><label>Product id:</label><td><td><input type="text"  name="p_id" id="h_textbox"  value="<?php echo $product_id ?>"/></td>
<td><label>Branch Code:</label><td><td><input type="text"   name="b_id" id="h_textbox" value="<?php echo $branch_id ?>"/></td>
<td><input id="gobutton" type="submit" value="Get Report!!" name="submit"/></td>
</tr>

<tr>
<td valign="top"><label>Report: <label></td>
<td colspan="7"><textarea rows="8" cols="69.6"><?php echo $report ?></textarea></td>
</tr>



</table>


</br>
<!--<table cellspacing="10" bgcolor="solid #de8d66" id="t2" >

<tr>
<th></th><th align="left"><label>ACTUAL</label></th><th align="left"><label>TARGET</label></th><th></th>
</tr>

<tr>
<td><label>GROSS PROFIT:</label></td>
<td><input type="text"  name="gp" id="h_textbox"  value="<?php echo $gp ?>"/></td>
<td><input type="text"  name="gp2" id="h_textbox"  value="<?php echo $gp2 ?>"/></td>
<td><input id="gobutton" type="submit" value="Calculate!!!" name="submit"/></td>
</tr>

<tr>
<td><label>TOTAL EXPENSES:</label></td>
<td><input type="text"  name="te" id="h_textbox"  value="<?php echo $te ?>"/></td>
<td><input type="text"  name="te2" id="h_textbox"  value="<?php echo $te2 ?>"/></td>
<td align="center"><input id="gobutton" type="submit" value="Reset!!!" name="submit"/></td>

</tr>

<tr>
<td><label>GROSS PROFIT RATIO:</label></td>
<td><input type="text" class="textbox3" name="pid1" value="<?php echo $gpr ?>"/></td>
<td><input type="text" class="textbox3" name="pid1" value="<?php echo $gpr2 ?>"/></td>
</tr>

<tr>
<td><label>OPERATING RATIO:</label></td>
<td><input type="text" class="textbox3" name="pid1" value="<?php echo $or ?>"/></td>
<td><input type="text" class="textbox3" name="pid1" value="<?php echo $or2 ?>"/></td>
</tr>

<tr></tr>
</table>
 -->
</form>
</center>
</body>
</html>