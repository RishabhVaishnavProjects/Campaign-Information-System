<html>
<head>
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
	border:0px solid;
	color:red;
	width:140px;
	height:30px;
}


.textbox2{
    width: 85%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
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



.textbox2:focus {
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

td#data
{
	align:center;
}

#t2
{
	border-radius: 8px;
    border: 2px solid blue;
}
#t3
{
	border-radius: 8px;
    border: 2px solid blue;
}

body
{
    background: url(8.jpg);
    background-size: 1600px 1610px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<div id="section42" class="container-fluid">
<?php
$pc_error = $bc_error = "";
$p_code = $b_code = "";

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

//Variable declaration:-
$eexp1 = $aexp1 = $idexp1 = $pcexp1 = "";
$eexp2 = $aexp2 = $idexp2 = $pcexp2 = "";
$eexp3 = $aexp3 = $idexp3 = $pcexp3 = "";
$eexp4 = $aexp4 = $idexp4 = $pcexp4 = "";
$eexp5 = $aexp5 = $idexp5 = $pcexp5 = "";
$eexp6 = $aexp6 = $idexp6 = $pcexp6 = "";
$eexp7 = $aexp7 = $idexp7 = $pcexp7 = "";
$eexp8 = $aexp8 = $idexp8 = $pcexp8 = "";
$eexp9 = $aexp9 = $idexp9 = $pcexp9 = "";
$eexp10 = $aexp10 = $idexp10 = $pcexp10 = "";
$eexp11 = $aexp11 = $idexp11 = $pcexp11 = "";
$eexp12 = $aexp12 = $idexp12 = $pcexp12 = "";
$eexp13 = $aexp13 = $idexp13 = $pcexp13 = "";
$eexp14 = $aexp14 = $idexp14 = $pcexp14 = "";
$eexp15 = $aexp15 = $idexp15 = $pcexp15 = "";
$eexp16 = $aexp16 = $idexp16 = $pcexp16 = "";
$eexp17 = $aexp17 = $idexp17 = $pcexp17 = "";
$eexp18 = $aexp18 = $idexp18 = $pcexp18 = "";
$eexp19 = $aexp19 = $idexp19 = $pcexp19 = "";
$eexp20 = $aexp20 = $idexp20 = $pcexp20 = "";
$eexp21 = $aexp21 = $idexp21 = $pcexp21 = "";
$eexp22 = $aexp22 = $idexp22 = $pcexp22 = "";
$eexp23 = $aexp23 = $idexp23 = $pcexp23 = "";
$eexp24 = $aexp24 = $idexp24 = $pcexp24 = "";
//$eexp16 = $aexp16 = $idexp16 = $pcexp16 = "";

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
				$branch_id = test_input($_POST["branch_code"]);
				$sql1="SELECT * FROM estimate_exp WHERE p_id='$product_id' AND b_id='$branch_id'";
				$sql2="SELECT * FROM actual_exp WHERE p_id='$product_id' AND b_id='$branch_id'";
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
					
					$eoe = ($eexp1 + $eexp2 + $eexp3 + $eexp4 + $eexp5 + $eexp6 + $eexp7 + $eexp8 + $eexp9 + $eexp10 + $eexp11 + $eexp12);
					$eade =	($eexp13 + $eexp14 + $eexp15 + $eexp16 + $eexp17 + $eexp18 + $eexp19 + $eexp20 + $eexp21 + $eexp22 + $eexp23 + $eexp24);
				 
					//$p_id = $row["p_id"];
					//$b_id = $row["b_id"];
					$er_expected = $row["return_expected"];
					//$alloted_amount = $row["est_budget"];
					$egp = $row["gross_profit"];
					//$reserve_amount = $row["reserve_amount"];	
					}
				}
				else
				{
				echo "0 results";
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
					
					
					
					$aoe = ($aexp1 + $aexp2 + $aexp3 + $aexp4 + $aexp5 + $aexp6 + $aexp7 + $aexp8 + $aexp9 + $aexp10 + $aexp11 + $aexp12);
					$aade =	($aexp13 + $aexp14 + $aexp15 + $aexp16 + $aexp17 + $aexp18 + $aexp19 + $aexp20 + $aexp21 + $aexp22 + $aexp23 + $aexp24);
					//$p_id = $row["p_id"];
					//$b_id = $row["b_id"];
					$ar_expected = $row["return_expected"];
					//$alloted_amount = $row["est_budget"];
					$agp = $row["gross_profit"];
					//$reserve_amount = $row["reserve_amount"];	
					}
				}
				else
				{
				echo "0 results";
				}
				//INCREMENT/DECREMENT AND DECREMENT CALCULATION:-
				
				
				
				
				
				
				if($eexp1 > $aexp1)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp1;
					$atemp1 = $aexp1;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp1 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp1 = "(-) $pcast %";
				}
				else if($eexp1 == $aexp1)//dono equal
				{
					$idexp1 = "NO CHANGE";
					$pcexp1 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp1;
					$atemp1 = $aexp1;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp1 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp1 = "(+) $pcast %";
				}
				
				
				
				
				if($eexp2 > $aexp2)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp2;
					$atemp1 = $aexp2;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp2 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp2 = "(-) $pcast %";
				}
				else if($eexp2 == $aexp2)//dono equal
				{
					$idexp2 = "NO CHANGE";
					$pcexp2 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp2;
					$atemp1 = $aexp2;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp2 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp2 = "(+) $pcast %";
				}
				/*$etemp1 = $eexp1;
					$atemp1 = $aexp1;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp1 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp1 = "(+) $pcast %";*/
				
				
				if($eexp3 > $aexp3)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp3;
					$atemp1 = $aexp3;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp3 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp3 = "(-) $pcast %";
				}
				else if($eexp3 == $aexp3)//dono equal
				{
					$idexp3 = "NO CHANGE";
					$pcexp3 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp3;
					$atemp1 = $aexp3;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp3 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp3 = "(+) $pcast %";
				}
				
				
				if($eexp4 > $aexp4)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp4;
					$atemp1 = $aexp4;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp4 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp4 = "(-) $pcast %";
				}
				else if($eexp4 == $aexp4)//dono equal
				{
					$idexp4 = "NO CHANGE";
					$pcexp4 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp4;
					$atemp1 = $aexp4;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp4 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp4 = "(+) $pcast %";
				}
				
				
				if($eexp5 > $aexp5)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp5;
					$atemp1 = $aexp5;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp5 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp5 = "(-) $pcast %";
				}
				else if($eexp5 == $aexp5)//dono equal
				{
					$idexp5 = "NO CHANGE";
					$pcexp5 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp5;
					$atemp1 = $aexp5;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp5 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp5 = "(+) $pcast %";
				}
				
				if($eexp6 > $aexp6)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp6;
					$atemp1 = $aexp6;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp6 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp6 = "(-) $pcast %";
				}
				else if($eexp6 == $aexp6)//dono equal
				{
					$idexp6 = "NO CHANGE";
					$pcexp6 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp6;
					$atemp1 = $aexp6;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp6 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp6 = "(+) $pcast %";
				}
				
				if($eexp7 > $aexp7)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp7;
					$atemp1 = $aexp7;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp7 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp7 = "(-) $pcast %";
				}
				else if($eexp7 == $aexp7)//dono equal
				{
					$idexp7 = "NO CHANGE";
					$pcexp7 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp7;
					$atemp1 = $aexp7;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp7 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp7 = "(+) $pcast %";
				}
				
				if($eexp8 > $aexp8)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp8;
					$atemp1 = $aexp8;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp8 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp8 = "(-) $pcast %";
				}
				else if($eexp8 == $aexp8)//dono equal
				{
					$idexp8 = "NO CHANGE";
					$pcexp8 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp8;
					$atemp1 = $aexp8;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp8 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp8 = "(+) $pcast %";
				}
				
				if($eexp9 > $aexp9)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp9;
					$atemp1 = $aexp9;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp9 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp9 = "(-) $pcast %";
				}
				else if($eexp9 == $aexp9)//dono equal
				{
					$idexp9 = "NO CHANGE";
					$pcexp9 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp9;
					$atemp1 = $aexp9;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp9 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp9 = "(+) $pcast %";
				}
				
				if($eexp10 > $aexp10)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp10;
					$atemp1 = $aexp10;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp10 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp10 = "(-) $pcast %";
				}
				else if($eexp10 == $aexp10)//dono equal
				{
					$idexp10 = "NO CHANGE";
					$pcexp10 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp10;
					$atemp1 = $aexp10;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp10 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp10 = "(+) $pcast %";
				}
				
				if($eexp11 > $aexp11)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp11;
					$atemp1 = $aexp11;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp11 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp11 = "(-) $pcast %";
				}
				else if($eexp11 == $aexp11)//dono equal
				{
					$idexp11 = "NO CHANGE";
					$pcexp11 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp11;
					$atemp1 = $aexp11;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp11 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp11 = "(+) $pcast %";
				}
				
				if($eexp12 > $aexp12)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp12;
					$atemp1 = $aexp12;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp12 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp12 = "(-) $pcast %";
				}
				else if($eexp12 == $aexp12)//dono equal
				{
					$idexp12 = "NO CHANGE";
					$pcexp12 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp12;
					$atemp1 = $aexp12;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp12 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp12 = "(+) $pcast %";
				}
				
				if($eexp13 > $aexp13)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp13;
					$atemp1 = $aexp13;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp13 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp13 = "(-) $pcast %";
				}
				else if($eexp13 == $aexp13)//dono equal
				{
					$idexp13 = "NO CHANGE";
					$pcexp13 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp13;
					$atemp1 = $aexp13;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp13 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp13 = "(+) $pcast %";
				}
				
				if($eexp14 > $aexp14)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp14;
					$atemp1 = $aexp14;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp14 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp14 = "(-) $pcast %";
				}
				else if($eexp14 == $aexp14)//dono equal
				{
					$idexp14 = "NO CHANGE";
					$pcexp14 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp14;
					$atemp1 = $aexp14;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp14 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp14 = "(+) $pcast %";
				}
				
				if($eexp15 > $aexp15)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp15;
					$atemp1 = $aexp15;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp15 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp15 = "(-) $pcast %";
				}
				else if($eexp15 == $aexp15)//dono equal
				{
					$idexp15 = "NO CHANGE";
					$pcexp15 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp15;
					$atemp1 = $aexp15;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp15 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp15 = "(+) $pcast %";
				}
				
				if($eexp16 > $aexp16)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp16;
					$atemp1 = $aexp16;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp16 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp16 = "(-) $pcast %";
				}
				else if($eexp16 == $aexp16)//dono equal
				{
					$idexp16 = "NO CHANGE";
					$pcexp16 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp16;
					$atemp1 = $aexp16;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp16 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp16 = "(+) $pcast %";
				}
				
				if($eexp17 > $aexp17)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp17;
					$atemp1 = $aexp17;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp17 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp17 = "(-) $pcast %";
				}
				else if($eexp17 == $aexp17)//dono equal
				{
					$idexp17 = "NO CHANGE";
					$pcexp17 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp17;
					$atemp1 = $aexp17;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp17 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp17 = "(+) $pcast %";
				}
				
				if($eexp18 > $aexp18)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp18;
					$atemp1 = $aexp18;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp18 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp18 = "(-) $pcast %";
				}
				else if($eexp18 == $aexp18)//dono equal
				{
					$idexp18 = "NO CHANGE";
					$pcexp18 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp18;
					$atemp1 = $aexp18;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp18 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp18 = "(+) $pcast %";
				}
				
				if($eexp19 > $aexp19)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp19;
					$atemp1 = $aexp19;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp19 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp19 = "(-) $pcast %";
				}
				else if($eexp19 == $aexp19)//dono equal
				{
					$idexp19 = "NO CHANGE";
					$pcexp19 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp19;
					$atemp1 = $aexp19;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp19 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp19 = "(+) $pcast %";
				}
				
				if($eexp20 > $aexp20)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp20;
					$atemp1 = $aexp20;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp20 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp20 = "(-) $pcast %";
				}
				else if($eexp20 == $aexp20)//dono equal
				{
					$idexp20 = "NO CHANGE";
					$pcexp20 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp20;
					$atemp1 = $aexp20;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp20 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp20 = "(+) $pcast %";
				}
				
				if($eexp21 > $aexp21)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp21;
					$atemp1 = $aexp21;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp21 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp21 = "(-) $pcast %";
				}
				else if($eexp21 == $aexp21)//dono equal
				{
					$idexp21 = "NO CHANGE";
					$pcexp21 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp21;
					$atemp1 = $aexp21;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp21 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp21 = "(+) $pcast %";
				}
				
				if($eexp22 > $aexp22)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp22;
					$atemp1 = $aexp22;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp22 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp22 = "(-) $pcast %";
				}
				else if($eexp22 == $aexp22)//dono equal
				{
					$idexp22 = "NO CHANGE";
					$pcexp22 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp22;
					$atemp1 = $aexp22;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp22 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp22 = "(+) $pcast %";
				}
				
				if($eexp23 > $aexp23)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp23;
					$atemp1 = $aexp23;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp23 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp23 = "(-) $pcast %";
				}
				else if($eexp23 == $aexp23)//dono equal
				{
					$idexp23 = "NO CHANGE";
					$pcexp23 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp23;
					$atemp1 = $aexp23;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp23 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp23 = "(+) $pcast %";
				}
				
				if($eexp24 > $aexp24)//expected greater then actual so - will be their
				{
					$etemp1 = $eexp24;
					$atemp1 = $aexp24;
					$calc = $etemp1 - $atemp1;
					$cast = (string) $calc;
					$idexp24 = "(-) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp24 = "(-) $pcast %";
				}
				else if($eexp24 == $aexp24)//dono equal
				{
					$idexp24 = "NO CHANGE";
					$pcexp24 = "NO CHANGE";
				}
				else//actual greater then expected so +
				{
					$etemp1 = $eexp24;
					$atemp1 = $aexp24;
					$calc = $atemp1 - $etemp1;
					$cast = (string) $calc;
					$idexp24 = "(+) $cast";
					
					$pcalc = $calc/$etemp1*(100);
					$pcast = (string) $pcalc;
					$pcexp24 = "(+) $pcast %";
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
  <li><a href="B_MANAGER.php">SALES BUDGET</a></li>
  <li><a href="P_L.php">PRODUCT LIST</a></li>
  <li><a href="VARIANCE.php">VARIANCE</a></li>
  <li><a href="C_ANALYSIS.php">COMAPARATIVE ANALYSIS</a></li>
  <li><a href="R_ANALYSIS.php">REPORTS</a></li>
  <li style="float:right"><a href="LOGOUT.php">LOG OUT</a></li>
</ul> 
<br/>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td><input type="text" class="textbox2" placeholder="Enter Product Id" name="product_code"/></td>
<td><input type="text" class="textbox2" placeholder="Enter Branch Id" name="branch_code"/></td>
<td><input id="gobutton" type="submit" value="Search" name="submit"/></td>
</tr>
</table>
</form>
</center>


<div >
<center>
<table cellspacing="12" bgcolor="#20B2AA" id="t2">
<thead>
<tr align="center">
<th><label class="lablel2">OPERATING EXPENSES|</label></th><th><label class="lablel2">ESTIMATED AMOUNT|</label></th>
<th><label class="lablel2">ACTUAL AMOUNT|</label></th><th><label class="lablel2">INCREMENT/DECREMENT|</label></th><th><label class="lablel2">PERCENTAGE CHANGE</label></th>
</tr>
</thead>
<tr align="center">
<td><label>Sales Salaries</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp1 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp1 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp1 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp1 ?>"/></td>
</tr>


<tr align="center">
<td><label>Sales Commision</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp2 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp2 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp2 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp2 ?>"/></td>
</tr>

<tr align="center">
<td><label>Tele-Advertising</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp3 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp3 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp3 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp3 ?>"/></td>
</tr>

<tr align="center">
<td><label>Tele-Marketing</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp4 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp4 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp4 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp4 ?>"/></td>
</tr>

<tr align="center">
<td><label>Publicity-Material</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp5 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp5 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp5 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp5 ?>"/></td>
</tr>

<tr align="center">
<td><label>Newpaper-Advertising</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp6 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp6 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp6 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp6 ?>"/><//></td>
</tr>

<tr align="center">
<td><label>Radio-Advertising</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp7 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp7 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp7 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp7 ?>"/></td>
</tr>

<tr align="center">
<td><label>Direct Mail-Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp8 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp8 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp8 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp8 ?>"/></td>
</tr>

<tr align="center">
<td><label>Pamphlet Printing-Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp9 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp9 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp9 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp9 ?>"/></td>
</tr>

<tr align="center">
<td><label>Magazine Advertising</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp10 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp10 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp10 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp10 ?>"/></td>
</tr>

<tr align="center">
<td><label>Brocher Printing-Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp11 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp11 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp11 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp11 ?>"/></td>
</tr>

<tr align="center">
<td><label>Other Promotional-Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp12 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp12 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp12 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp12 ?>"/></td>
</tr>
</table>
<br/>
<table cellspacing="12" bgcolor="#20B2AA" id="t3">
<thead>
<tr align="center">
<th><label class="lablel2">ADMINISTRATIVE EXPENSES|</label></th><th><label class="lablel2">ESTIMATED AMOUNT|</label></th>
<th><label class="lablel2">ACTUAL AMOUNT|</label></th><th><label class="lablel2">INCREMENT/DECREMENT|</label></th><th><label class="lablel2">PERCENTAGE CHANGE</label></th>
</tr>
</thead>


<tr align="center">
<td><label>Casual Labour</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp13 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp13 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp13 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp13 ?>"/></td>
</tr>

<tr align="center">
<td><label>Office</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp14 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp14 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp14 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp14 ?>"/></td>
</tr>

<tr align="center">
<td><label>Store Supplies</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp15 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp15 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp15 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp15 ?>"/></td>
</tr>

<tr align="center">
<td><label>General</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp16 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp16 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp16 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp16 ?>"/><//></td>
</tr>

<tr align="center">
<td><label>Repairs</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp17 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp17 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp17 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp17 ?>"/></td>
</tr>

<tr align="center">
<td><label>Electricity</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp18 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp18 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp18 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp18 ?>"/></td>
</tr>


<tr align="center">
<td><label>Power</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp19 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp19 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp19 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp19 ?>"/></td>
</tr>

<tr align="center">
<td><label>Legal Fees</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp20 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp20 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp20 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp20 ?>"/></td>
</tr>

<tr align="center">
<td><label>Miscellaneous Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp21 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp21 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp21 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp21 ?>"/></td>
</tr>

<tr align="center">
<td><label>Toll Free Services</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp22 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp22 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp22 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp22 ?>"/></td>
</tr>

<tr align="center">
<td><label>Travel & Training Exp</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp23 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp23 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp23 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp23 ?>"/><//></td>
</tr>

<tr align="center">
<td><label>IT Support</label></td>
<td><input type="text" class="textbox3" value="<?php echo $eexp24 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $aexp24 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $idexp24 ?>"/></td>
<td><input type="text" class="textbox3" value="<?php echo $pcexp24 ?>"/></td>
</tr>
</table>
</center>
<br/>
<center>
<table cellpadding="7" >
<thead>
<tr align="left">
<th></th><th><label>ESTIMATED</label></th><th><label>ACTUAL</label></th>
</tr>
<tr align="left">
<th><label>TOTAL OPERATING EXPENSES</label></th><th><input type="text" class="textbox4" value="<?php echo $eoe ?>"/></th><th><input type="text" class="textbox4" value="<?php echo $aoe ?>"/></th>
</tr>
<tr align="left">
<th><label>TOTAL ADMINISTRATIVE EXPENSES</label></th><th><input type="text" class="textbox4" value="<?php echo $eade ?>"/></th><th><input type="text" class="textbox4" value="<?php echo $aade ?>"/></th>
</tr>
<tr align="left">
<th><label>RETURN</label></th><th><input type="text" class="textbox4" value="<?php echo $er_expected ?>"/></th><th><input type="text" class="textbox4" value="<?php echo $ar_expected ?>"/></th>
</tr>
<tr align="left">
<th><label>GROSS PROFIT</label></th><th><input type="text" class="textbox4" value="<?php echo $egp ?>"/></th><th><input type="text" class="textbox4" value="<?php echo $agp ?>"/></th>
</tr>
</thead>
</table>
</center>
</div>



</body>
</html>
<!--http://www.cssfontstack.com/-->