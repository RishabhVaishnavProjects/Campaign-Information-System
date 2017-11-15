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

.textbox4{
    font-size: 18px;
	<!--background-color:transparent;-->
	border: 1px solid black;
	color:red;
	width:160px;
	height:30px;
}

.textbox3
{
	font-size: 18px;
	background-color:transparent;
	border:0px solid;
	color:white;
	width:110px;
	height:30px;
}

.textbox5
{
	font-size: 18px;
	background-color:transparent;
	border:0px solid;
	color:white;
	width:157px;
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
#h_textbox:focus {
    background-color: lightblue;
}


#t2
{
	border-radius: 8px;
    border: 2px solid blue;
}

body
{
    background: url(8.jpg);
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
		
		if (empty($_POST["product_code1"]))
			{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$pc_error = "Required";
			}
		else if(empty($_POST["product_code2"]))
			{
				echo "<script>alert('Both the Fields are Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["product_code1"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["product_code2"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else
			{
				$product_id1 = test_input($_POST["product_code1"]);
				$product_id2 = test_input($_POST["product_code2"]);
				$sql1="SELECT * FROM actual_exp WHERE p_id='$product_id1'";
				$sql2="SELECT * FROM actual_exp WHERE p_id='$product_id2'";
				$result1=mysqli_query($conn,$sql1);
				$result2=mysqli_query($conn,$sql2);
					if (mysqli_num_rows($result1) > 0)
					{
							// output data of each row
						while($row = mysqli_fetch_assoc($result1))
						{
							$eexp1 = $row["ss"];
							$eexp2 = $row["sc"];
							$eexp3 = $row["ta"];
							$eexp4 = $row["tm"];
							$eexp5 = $row["pm"];
							$eexp6 = $row["na"];
							$eexp7 = $row["ra"];
							$eexp8 = $row["dm"];
							$eexp9 = $row["pp"];
							$eexp10 = $row["ma"];
							$eexp11 = $row["bp"];
							$eexp12 = $row["op"];
					
							$eexp13 = $row["cl"];
							$eexp14 = $row["os"];
							$eexp15 = $row["sts"];
							$eexp16 = $row["gm"];
							$eexp17 = $row["r"];
							$eexp18 = $row["e"];
							$eexp19 = $row["p"];
							$eexp20 = $row["l"];
							$eexp21 = $row["m"];
							$eexp22 = $row["t"];
							$eexp23 = $row["tt"];
							$eexp24 = $row["it"];
							$n_o_p1 = $row["n_o_p"];
							$c_duration1 = $row["c_duration"];
							$egp1 = $row["gross_profit"];
							
							$eoe1 = ($eexp1 + $eexp2 + $eexp3 + $eexp4 + $eexp5 + $eexp6 + $eexp7 + $eexp8 + $eexp9 + $eexp10 + $eexp11 + $eexp12);
							$eade1 = ($eexp13 + $eexp14 + $eexp15 + $eexp16 + $eexp17 + $eexp18 + $eexp19 + $eexp20 + $eexp21 + $eexp22 + $eexp23 + $eexp24);
							$ete1 = ($eoe1+$eade1);
						}
					}
						
					if (mysqli_num_rows($result2) > 0)
					{
						// output data of each row
						while($row = mysqli_fetch_assoc($result2))
						{
							$aexp1 = $row["ss"];
							$aexp2 = $row["sc"];
							$aexp3 = $row["ta"];
							$aexp4 = $row["tm"];
							$aexp5 = $row["pm"];
							$aexp6 = $row["na"];
							$aexp7 = $row["ra"];
							$aexp8 = $row["dm"];
							$aexp9 = $row["pp"];
							$aexp10 = $row["ma"];
							$aexp11 = $row["bp"];
							$aexp12 = $row["op"];
					
							$aexp13 = $row["cl"];
							$aexp14 = $row["os"];
							$aexp15 = $row["sts"];
							$aexp16 = $row["gm"];
							$aexp17 = $row["r"];
							$aexp18 = $row["e"];
							$aexp19 = $row["p"];
							$aexp20 = $row["l"];
							$aexp21 = $row["m"];
							$aexp22 = $row["t"];
							$aexp23 = $row["tt"];
							$aexp24 = $row["it"];
							$n_o_p2 = $row["n_o_p"];
							$c_duration2 = $row["c_duration"];
							$egp2 = $row["gross_profit"];
						}
					
						$aoe2 = ($aexp1 + $aexp2 + $aexp3 + $aexp4 + $aexp5 + $aexp6 + $aexp7 + $aexp8 + $aexp9 + $aexp10 + $aexp11 + $aexp12);
						$aade2 = ($aexp13 + $aexp14 + $aexp15 + $aexp16 + $aexp17 + $aexp18 + $aexp19 + $aexp20 + $aexp21 + $aexp22 + $aexp23 + $aexp24);
						$ate2 = ($aoe2+$aade2);
			
					}
					
					//percentage calculation:-
					//Operating expenses
					//$temp = $eoe1-$aoe2;
					if($eoe1 > $aoe2)//expected greater then actual so - will be their
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(+) $pcast2 %";
					}
					else if($eoe1 == $aoe2)//dono equal
					{
						$peoe1 = "NO DIFFERENCE";
						$peoe2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(-) $pcast2 %";
					}
					
					
					
					if($eade1 > $aade2)//expected greater then actual so - will be their
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(+) $pcast2 %";
					}
					else if($eade1 == $aade2)//dono equal
					{
						$peade1 = "NO DIFFERENCE";
						$paade2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(-) $pcast2 %";
					}
					
					if($ete1 > $ate2)//expected greater then actual so - will be their
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(+) $pcast2 %";
					}
					else if($ete1 == $ate2)//dono equal
					{
						$pete1 = "NO DIFFERENCE";
						$pate2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(-) $pcast2 %";
					}
					//$egp1  $egp2
					
					if($egp1 > $egp2)//expected greater then actual so - will be their
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(+) $pcast2 %";
					}
					else if($egp1 == $egp2)//dono equal
					{
						$pegp1 = "NO DIFFERENCE";
						$pegp2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(-) $pcast2 %";
					}
					
					
				
			}
			
			
	}
	//(isset($_POST['calculate']))
	else if(isset($_POST['calculate']))
	{
		$product_id1 = test_input($_POST["pid1"]);
		$product_id2 = test_input($_POST["pid2"]);
		
		$n_o_p1 = test_input($_POST["n_o_p1"]);
		$n_o_p2 = test_input($_POST["n_o_p2"]);
		
		$p1id=test_input($_POST["pid1"]);
		$p2id=test_input($_POST["pid2"]);
		
		$sql3="SELECT * FROM actual_exp WHERE p_id='$p1id'";
		$sql4="SELECT * FROM actual_exp WHERE p_id='$p2id'";
		
		$result3=mysqli_query($conn,$sql3);
		$result4=mysqli_query($conn,$sql4);
		
		if (mysqli_num_rows($result3) > 0)
					{
						while($row = mysqli_fetch_assoc($result3))
						{
						$c_duration1 = $row["c_duration"];
						}
					}
		if (mysqli_num_rows($result4) > 0)
					{
						while($row = mysqli_fetch_assoc($result4))
						{
						$c_duration2 = $row["c_duration"];
						}
					}
		
		$p1oe = test_input($_POST["p1oe"]);
		$p2oe = test_input($_POST["p2oe"]);
		
		$p1ade = test_input($_POST["p1ade"]);
		$p2ade = test_input($_POST["p2ade"]);
		
		$p1te = test_input($_POST["p1te"]);
		$p2te = test_input($_POST["p2te"]);
		
		$p1gp = test_input($_POST["p1gp"]);
		$p2gp = test_input($_POST["p2gp"]);
		
		$p1cd = test_input($_POST["p1cd"]);
		$p2cd = test_input($_POST["p2cd"]);
		
		//amount calculation
		$eoe1 = ($p1oe / $c_duration1)* $p1cd;
		$aoe2 = ($p2oe / $c_duration2)* $p2cd;
		
		$eade1 = ($p1ade / $c_duration1)* $p1cd;
		$aade2 = ($p2ade / $c_duration2)* $p2cd;
		
		$ete1 = ($p1te / $c_duration1)* $p1cd;
		$ate2 = ($p2te / $c_duration2)* $p2cd;
		
		$egp1 = ($p1gp / $c_duration1)* $p1cd;
		$egp2 = ($p2gp / $c_duration2)* $p2cd;
		
		
		$c_duration1 = $p1cd;
		$c_duration2 = $p2cd;
		//percent calculation
		
		
					if($eoe1 > $aoe2)//expected greater then actual so - will be their
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(+) $pcast2 %";
					}
					else if($eoe1 == $aoe2)//dono equal
					{
						$peoe1 = "NO DIFFERENCE";
						$peoe2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(-) $pcast2 %";
					}
					
					
					
					if($eade1 > $aade2)//expected greater then actual so - will be their
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(+) $pcast2 %";
					}
					else if($eade1 == $aade2)//dono equal
					{
						$peade1 = "NO DIFFERENCE";
						$paade2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(-) $pcast2 %";
					}
					
					if($ete1 > $ate2)//expected greater then actual so - will be their
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(+) $pcast2 %";
					}
					else if($ete1 == $ate2)//dono equal
					{
						$pete1 = "NO DIFFERENCE";
						$pate2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(-) $pcast2 %";
					}
					//$egp1  $egp2
					
					if($egp1 > $egp2)//expected greater then actual so - will be their
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(+) $pcast2 %";
					}
					else if($egp1 == $egp2)//dono equal
					{
						$pegp1 = "NO DIFFERENCE";
						$pegp2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(-) $pcast2 %";
					}
		
		
	}
	else
	{
				$product_id1 = test_input($_POST["pid1"]);
				$product_id2 = test_input($_POST["pid2"]);
				$sql1="SELECT * FROM actual_exp WHERE p_id='$product_id1'";
				$sql2="SELECT * FROM actual_exp WHERE p_id='$product_id2'";
				$result1=mysqli_query($conn,$sql1);
				$result2=mysqli_query($conn,$sql2);
					if (mysqli_num_rows($result1) > 0)
					{
							// output data of each row
						while($row = mysqli_fetch_assoc($result1))
						{
							$eexp1 = $row["ss"];
							$eexp2 = $row["sc"];
							$eexp3 = $row["ta"];
							$eexp4 = $row["tm"];
							$eexp5 = $row["pm"];
							$eexp6 = $row["na"];
							$eexp7 = $row["ra"];
							$eexp8 = $row["dm"];
							$eexp9 = $row["pp"];
							$eexp10 = $row["ma"];
							$eexp11 = $row["bp"];
							$eexp12 = $row["op"];
					
							$eexp13 = $row["cl"];
							$eexp14 = $row["os"];
							$eexp15 = $row["sts"];
							$eexp16 = $row["gm"];
							$eexp17 = $row["r"];
							$eexp18 = $row["e"];
							$eexp19 = $row["p"];
							$eexp20 = $row["l"];
							$eexp21 = $row["m"];
							$eexp22 = $row["t"];
							$eexp23 = $row["tt"];
							$eexp24 = $row["it"];
							$n_o_p1 = $row["n_o_p"];
							$c_duration1 = $row["c_duration"];
							$egp1 = $row["gross_profit"];
							
							$eoe1 = ($eexp1 + $eexp2 + $eexp3 + $eexp4 + $eexp5 + $eexp6 + $eexp7 + $eexp8 + $eexp9 + $eexp10 + $eexp11 + $eexp12);
							$eade1 = ($eexp13 + $eexp14 + $eexp15 + $eexp16 + $eexp17 + $eexp18 + $eexp19 + $eexp20 + $eexp21 + $eexp22 + $eexp23 + $eexp24);
							$ete1 = ($eoe1+$eade1);
						}
					}
						
					if (mysqli_num_rows($result2) > 0)
					{
						// output data of each row
						while($row = mysqli_fetch_assoc($result2))
						{
							$aexp1 = $row["ss"];
							$aexp2 = $row["sc"];
							$aexp3 = $row["ta"];
							$aexp4 = $row["tm"];
							$aexp5 = $row["pm"];
							$aexp6 = $row["na"];
							$aexp7 = $row["ra"];
							$aexp8 = $row["dm"];
							$aexp9 = $row["pp"];
							$aexp10 = $row["ma"];
							$aexp11 = $row["bp"];
							$aexp12 = $row["op"];
					
							$aexp13 = $row["cl"];
							$aexp14 = $row["os"];
							$aexp15 = $row["sts"];
							$aexp16 = $row["gm"];
							$aexp17 = $row["r"];
							$aexp18 = $row["e"];
							$aexp19 = $row["p"];
							$aexp20 = $row["l"];
							$aexp21 = $row["m"];
							$aexp22 = $row["t"];
							$aexp23 = $row["tt"];
							$aexp24 = $row["it"];
							$n_o_p2 = $row["n_o_p"];
							$c_duration2 = $row["c_duration"];
							$egp2 = $row["gross_profit"];
						}
					
						$aoe2 = ($aexp1 + $aexp2 + $aexp3 + $aexp4 + $aexp5 + $aexp6 + $aexp7 + $aexp8 + $aexp9 + $aexp10 + $aexp11 + $aexp12);
						$aade2 = ($aexp13 + $aexp14 + $aexp15 + $aexp16 + $aexp17 + $aexp18 + $aexp19 + $aexp20 + $aexp21 + $aexp22 + $aexp23 + $aexp24);
						$ate2 = ($aoe2+$aade2);
			
					}
					
					//percentage calculation:-
					//Operating expenses
					//$temp = $eoe1-$aoe2;
					if($eoe1 > $aoe2)//expected greater then actual so - will be their
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(+) $pcast2 %";
					}
					else if($eoe1 == $aoe2)//dono equal
					{
						$peoe1 = "NO DIFFERENCE";
						$peoe2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eoe1;
						$atemp1 = $aoe2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peoe1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$peoe2 = "(-) $pcast2 %";
					}
					
					
					
					if($eade1 > $aade2)//expected greater then actual so - will be their
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(+) $pcast2 %";
					}
					else if($eade1 == $aade2)//dono equal
					{
						$peade1 = "NO DIFFERENCE";
						$paade2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $eade1;
						$atemp1 = $aade2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$peade1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$paade2 = "(-) $pcast2 %";
					}
					
					if($ete1 > $ate2)//expected greater then actual so - will be their
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(+) $pcast2 %";
					}
					else if($ete1 == $ate2)//dono equal
					{
						$pete1 = "NO DIFFERENCE";
						$pate2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $ete1;
						$atemp1 = $ate2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pete1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pate2 = "(-) $pcast2 %";
					}
					//$egp1  $egp2
					
					if($egp1 > $egp2)//expected greater then actual so - will be their
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $etemp1 - $atemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(-) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(-) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(+) $pcast2 %";
					}
					else if($egp1 == $egp2)//dono equal
					{
						$pegp1 = "NO DIFFERENCE";
						$pegp2 = "NO DIFFERENCE";
					}
					else//actual greater then expected so +
					{
						$etemp1 = $egp1;
						$atemp1 = $egp2;
						$calc = $atemp1 - $etemp1;
						//$cast = (string) $calc;
						//$idexp1 = "(+) $cast";
					
						$pcalc = $calc/$etemp1*(100);
						$pcast = (string) $pcalc;
						$pegp1 = "(+) $pcast %";
						
						$pcalc2 = $calc/$atemp1*(100);
						$pcast2 = (string) $pcalc2;
						$pegp2 = "(-) $pcast2 %";
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
	<td><input type="text" name="product_code1" placeholder="Product Code" class="textbox" id="h_textbox"/></td>
	<td><input type="text" name="product_code2" placeholder="Product Code" class="textbox" id="h_textbox"/></td>
	<td><input id="gobutton" type="submit" value="Compare" name="submit"/></td>
</tr>
</table>
</br>
</br>
<table cellspacing="10" bgcolor="#20B2AA" id="t2">
<tr>
<td><center><label></label></center></td>
<td><input type="text" class="textbox5" value="<?php echo $n_o_p1 ?>" name="n_o_p1"/></center></td>
<td><input type="text" class="textbox5" value="<?php echo $n_o_p2 ?>" name="n_o_p2"/></center></td>
</tr>


<tr>
<td><center><label></label></center></td>
<td><label>Product Id:</label><input type="text" class="textbox3" name="pid1" value="<?php echo $product_id1 ?>"/></td>
<td><label>Product Id:</label><input type="text" class="textbox3" name="pid2" value="<?php echo $product_id2 ?>"/></td>
<td><center><label>% Difference(Base Product 1)</label></center></td>
<td><center><label>% Difference(Base Product 2)</label></center></td>
</tr>

<tr>
<td><label>Operating Expenses:</label></td>
<td><input type="text" class="textbox" value="<?php echo  $eoe1?>" name="p1oe" id="h_textbox"/></td>
<td><input type="text" class="textbox" value="<?php echo $aoe2 ?>" name="p2oe" id="h_textbox"/></td>
<td><center><input type="text" class="textbox" value="<?php echo $peoe1 ?>"  id="h_textbox" size="5"/></center></td>
<td><center><input type="text" class="textbox" value="<?php echo $peoe2 ?>"  id="h_textbox"/></center></td>
</tr>

<tr>
<td><label>Administrative Expenses:</label></td>
<td><input type="text" class="textbox" value="<?php echo $eade1 ?>" name="p1ade" id="h_textbox"/></td>
<td><input type="text" class="textbox" value="<?php echo $aade2 ?>" name="p2ade" id="h_textbox"/></td>
<td><center><input type="text" class="textbox" value="<?php echo $peade1 ?>" id="h_textbox"/></center></td>
<td><center><input type="text" class="textbox" value="<?php echo $paade2 ?>" id="h_textbox"/></center></td>
</tr>

<tr>
<td><center><label>Total Expenses:</label></center></td>
<td><input type="text" class="textbox" value="<?php echo $ete1 ?>" name="p1te" id="h_textbox"/></td>
<td><input type="text" class="textbox" value="<?php echo $ate2 ?>" name="p2te" id="h_textbox"/></td>
<td><center><input type="text" class="textbox" value="<?php echo $pete1 ?>" id="h_textbox"/></center></td>
<td><center><input type="text" class="textbox" value="<?php echo $pate2 ?>" id="h_textbox"/></center></td>
</tr>

<tr>
<td><center><label>Gross Profit:</label></center></td>
<td><input type="text" class="textbox" value="<?php echo $egp1 ?>" name="p1gp" id="h_textbox"/></td>
<td><input type="text" class="textbox" value="<?php echo $egp2 ?>" name="p2gp" id="h_textbox"/></td>
<td><center><input type="text" class="textbox" value="<?php echo $pegp1 ?>" id="h_textbox"/></center></td>
<td><center><input type="text" class="textbox" value="<?php echo $pegp2 ?>" id="h_textbox"/></center></td>
</tr>

<tr>
<td><center><label>Campaign Duration:</label></center></td>
<td><input type="number" min="1" class="textbox" value="<?php echo $c_duration1 ?>" name="p1cd" id="h_textbox"/></td>
<td><input type="number" min="1" class="textbox" value="<?php echo $c_duration2 ?>" name="p2cd" id="h_textbox"/></td>
<td><center><input id="gobutton" type="submit" value="Calculate" name="calculate"/></center></td>
<td><center><input id="gobutton" type="submit" value="Reset" name="reset"/></center></td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
</table>
</br>
 
</form>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->