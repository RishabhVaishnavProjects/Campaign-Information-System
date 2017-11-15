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
	color:white;
	width:180px;
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
	border-radius: 6px;
    border: 2px solid blue;
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
    border: 2px solid black;
    border-radius: 2px;
    font-size: 16px;
    background-color: pink;
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
$record = "";
$sql2 = "";
$result4 = "";

$eexp1 = $aexp1 = "";
$eexp2 = $aexp2 = "";
$eexp3 = $aexp3 = "";
$eexp4 = $aexp4 = "";
$eexp5 = $aexp5 = "";
$eexp6 = $aexp6 = "";
$eexp7 = $aexp7 = "";
$eexp8 = $aexp8 = "";
$eexp9 = $aexp9 = "";
$eexp10 = $aexp10 = "";
$eexp11 = $aexp11 = "";
$eexp12 = $aexp12 = "";
$eexp13 = $aexp13 = "";
$eexp14 = $aexp14 = "";
$eexp15 = $aexp15 = "";
$eexp16 = $aexp16 = "";
$eexp17 = $aexp17 = "";
$eexp18 = $aexp18 = "";
$eexp19 = $aexp19 = "";
$eexp20 = $aexp20 = "";
$eexp21 = $aexp21 = "";
$eexp22 = $aexp22 = "";
$eexp23 = $aexp23 = "";
$eexp24 = $aexp24 = "";
$n_o_p1 = $c_duration1 = "";
$n_o_p2 = $c_duration2 = "";
$egp1 = $egp2 = "";
$eoe1 = $eade1 = $ete1 = "";
$aoe2 = $aade2 = $ate2 = "";	



$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
		die('could not connect'.mysql_error());
		
}	

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['submit']))
	{
		
		if (empty($_POST["product_code"]))
			{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$pc_error = "Required";
			}
		else if(empty($_POST["branch_code"]))
			{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["product_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["branch_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else
			{
				$product_id = test_input($_POST["product_code"]);
				$branch_code = test_input($_POST["branch_code"]);
				$sql="SELECT * FROM actual_exp WHERE p_id='$product_id' AND b_id='$branch_code'";
				$result=mysqli_query($conn,$sql);
				
					if (mysqli_num_rows($result) > 0)
					{
						
							// output data of each row
						while($row = mysqli_fetch_assoc($result))
						{
							
							$exp1 = $row["ss"];
							$exp2 = $row["sc"];
							$exp3 = $row["ta"];
							$exp4 = $row["tm"];
							$exp5 = $row["pm"];
							$exp6 = $row["na"];
							$exp7 = $row["ra"];
							$exp8 = $row["dm"];
							$exp9 = $row["pp"];
							$exp10 = $row["ma"];
							$exp11 = $row["bp"];
							$exp12 = $row["op"];
					
							$exp13 = $row["cl"];
							$exp14 = $row["os"];
							$exp15 = $row["sts"];
							$exp16 = $row["gm"];
							$exp17 = $row["r"];
							$exp18 = $row["e"];
							$exp19 = $row["p"];
							$exp20 = $row["l"];
							$exp21 = $row["m"];
							$exp22 = $row["t"];
							$exp23 = $row["tt"];
							$exp24 = $row["it"];
							$n_o_p = $row["n_o_p"];
							$ar = $row["return_expected"];
							$c_duration1 = $row["c_duration"];
							$gp1 = $row["gross_profit"];
							$p_id = $row["p_id"];
							
							$oe1 = ($exp1 + $exp2 + $exp3 + $exp4 + $exp5 + $exp6 + $exp7 + $exp8 + $exp9 + $exp10 + $exp11 + $exp12);
							$ade1 = ($exp13 + $exp14 + $exp15 + $exp16 + $exp17 + $exp18 + $exp19 + $exp20 + $exp21 + $exp22 + $exp23 + $exp24);
							$te1 = ($oe1+$ade1);
						}
					}
			}
	}
	//(isset($_POST['calculate']))
	else if(isset($_POST['calculate']))
	{
		
		if (empty($_POST["ar2"]))
			{
				echo "<script>alert('Estimated Actual Return Required!!!!');</script>";
				//$pc_error = "Required";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["ar2"])))
			{
				echo "<script>alert('Enter Positive and Digits Only!!!!');</script>";
			}
		else
			{
				$p_id = test_input($_POST["p_id"]);
				$n_o_p = test_input($_POST["n_o_p"]);
		
				$gp1 = test_input($_POST["gp"]);
				$oe1 = test_input($_POST["oe"]);
				$ade1 = test_input($_POST["ae"]);
				$te1 = test_input($_POST["te"]);
				$ar = test_input($_POST["ar"]);
				$ar2 = test_input($_POST["ar2"]);
		
				$gp2 = ($gp1 / $ar)*($ar2);
				$oe2 = ($oe1 / $ar)*($ar2);
				$ade2 = ($ade1 / $ar) * ($ar2);
				$te2 = ($te1 / $ar)*($ar2);
		
			}
					
				
		
		
	}
	else
	{
			
			
		
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
<table>
<tr>
	<td><input type="text" name="product_code" placeholder="product Code" class="textbox" id="h_textbox"/></td>
	<td><input type="text" name="branch_code" placeholder="branch Code" class="textbox" id="h_textbox"/></td>
	<td><input id="gobutton" type="submit" value="Submit" name="submit"/></td>
</tr>
</table>
</br>
</br>


<table cellspacing="6" bgcolor="#20B2AA" id="t2" >
<thead>
<tr></tr>
<tr align="left">
<th><label>Product id:</label><th><input type="text"  name="p_id" id="h_textbox3" value="<?php echo $p_id ?>"/></th>
<th><label>Product Name:</label><input type="text"   name="n_o_p" id="h_textbox3" value="<?php echo $n_o_p ?>"/></th>
</tr>

</thead>

<thead>
<tr align="left">
	<td></td>
	<td><label id="l1">ACTUAL</label></td>
	
	<td><label id="l1">TARGET</label></td>
<tr>
</thead>

<tr align="left">
	<td><label>GROSS PROFIT</label></td>
	<td><input type="text" name="gp" placeholder="" class="textbox" id="h_textbox" value="<?php echo $gp1 ?>"/></td>
	
	<td><input type="text" name="gp2" placeholder="" class="textbox" id="h_textbox2" value="<?php echo $gp2 ?>" readonly/></td>
</tr>

<tr align="left">
	<td><label>OPERATING EXPENSES</label></td>
	<td><input type="text" name="oe" placeholder="" class="textbox" id="h_textbox" value="<?php echo $oe1 ?>"/></td>
	
	<td><input type="text" name="oe2" placeholder="" class="textbox" id="h_textbox2" value="<?php echo $oe2 ?>" readonly/></td>	
</tr>

<tr align="left">
	<td><label>ADMINSITRATIVE EXPENSES</label></td>
	<td><input type="text" name="ae" placeholder="" class="textbox" id="h_textbox" value="<?php echo $ade1 ?>"/></td>
	
	<td><input type="text" name="ae2" placeholder="" class="textbox" id="h_textbox2" value="<?php echo $ade2 ?>" readonly/></td>
</tr>

<tr align="left">
	<td><label>TOTAL EXPENSES</label></td>
	<td><input type="text" name="te" placeholder="" class="textbox" id="h_textbox" value="<?php echo $te1 ?>"/></td>
	
	<td><input type="text" name="te2" placeholder="" class="textbox" id="h_textbox2" value="<?php echo $te2 ?>" readonly /></td>
</tr>

<tr align="left">
	<td><label>RETURN</label></td>
	<td><input type="text" name="ar" placeholder="" class="textbox" id="h_textbox" value="<?php echo $ar ?>"/></td>
	
	<td><input type="text" name="ar2" placeholder="" class="textbox" id="h_textbox" value="<?php echo $ar2 ?>"/></td>
	<!--<td><input type="submit" value="Calculate" id="gobutton" name="calculate"/></td>-->
	<!--<td></td><td></td>-->
</tr>
<tr>
<td></td>
<td><center><input type="submit" value="Calculate" id="gobutton" name="calculate"/></center></td>
</tr>

</table>

</br>
 
</form>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->