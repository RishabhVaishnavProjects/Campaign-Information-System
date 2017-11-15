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
    border: 2px solid black;
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
	font-size: 22px;
	font-style: normal;
	font-variant: normal;
	font-weight: 650;
    display: block;
    color: #666;
    text-align: center;
    padding: 20px 36px;
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


textarea
{
	font-size:22px;
}
#h_textbox2{
    width: 80%;
    box-sizing: border-box;
    border: 2px solid black;
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
    background-size: 1360px 650px;
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
		
		$branch_id = $product_id = $username = $report = "" ;
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(isset($_POST['submit']))
			{
				if (empty($_POST["p_id"]))
				{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$pc_error = "Required";
				}
				else if(empty($_POST["b_id"]))
				{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["u_id"]))
				{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["report"]))
				{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
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
				else if(!preg_match("/^[0-9]*$/",($_POST["u_id"])))
				{
				echo "<script>alert('Enter only Digits!!!!');</script>";
				}
				else
				{
					$product_id = test_input($_POST['p_id']);
					$branch_id = test_input($_POST['b_id']);
					$username = test_input($_POST['u_id']);
					$report = test_input($_POST['report']);
			
		
					$sql="INSERT INTO report VALUES('".$product_id."','".$branch_id."','".$username."','".$report."')";
					$result = mysqli_query($conn,$sql);
					if(!$result)
					{
					echo "<script>alert('ERROR IN GNENERATED REPORT!!!!');</script>";	
					}
					else
					{
					echo "<script>alert('REPORT GNENERATING SUCCESSFULLY!!!!');</script>";
					}
				}
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
  <li><a href="C_ACCOUNTANT.php">PRODUCT'S</a></li>
  <li><a href="UPDATE.php">UPDATE</a></li>
  <li><a href="C_ESTIMATE.php">ESTIMATES</a></li>
  <li><a href="C_REPORT.php">REPORT</a></li>
  <li style="float:right"><a href="LOGOUT.php">LOG OUT</a></li>
</ul>
</br>
</br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
</br>
</br>


<table cellspacing="1" id="t2">
<tr align="left">
<td><label>Product id:</label><td><td><input type="text"  name="p_id"   id="h_textbox"/></td>
<td><label>Branch Code:</label><td><td><input type="text"   name="b_id" id="h_textbox" /></td>
<td><label>User id:</label><td><td><input type="text"   name="u_id"     id="h_textbox" /></td>
</tr>

<tr>
<td valign="top"><label>Report: <label></td>
<td colspan="8"><textarea rows="8" cols="69.6" name="report" ></textarea></td>
</tr>

<tr>
 <td colspan="9" align="center"><input id="gobutton" type="submit" value="Submit" name="submit"/></td>
</tr>

</table>

</br>
 
</form>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->