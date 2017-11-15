<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<head>
<style> 
div {
    border-radius: 2px;
	border: 4px solid #73AD21;
    background-color: #20B2AA;
    background-position: left top;
    background-repeat: repeat;
     padding-left:.2px;
     padding-right:.2px;
	 padding-top:35px;
    width: 1000px;
    height: 1000px;
}
#h_textbox{
    width: 80%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
}



.textbox{
    width: 80%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
}
.textbox2{
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
	<!--background-color: #00FFFF;-->
}



.textbox2:focus {
    background-color: lightblue;
}

#h_textbox:focus {
    background-color: lightblue;
}

#heading1{
		font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 30px;
	font-style: normal;
	font-variant: normal;
	font-weight: 650;
    display: block;
    color: #666;
    <!--text-align: center;-->
    padding: 20px 36px;
    text-decoration: none;
}
label{
		font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	font-weight: 650;
    display: block;
    color: black;
    <!--text-align: center;-->
    padding: 20px 36px;
    text-decoration: none;
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

body
{
    background: url(4.jpg);
    background-size: 1600px 1500px;
    background-repeat: no-repeat;
}
</style>
<script>
function calculate2(expenses,no)
{    	
	var exp2 = parseFloat(expenses);
	if(exp2 < 0)
	{
		alert("PLEASE PROVIDE POSITIVE VALUES FOR EXPENSES");
	}		
}
</script>
</head>
<body>
<?php
error_reporting(0);
session_start();
$user_id=$_SESSION['username2'];



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
	$product_id = $branch_id = "";
	$p_id = $b_id = "";
	$exp1 =  $exp2 =  $exp3 =  $exp4 =  $exp5 =  "";
	$exp6 =  $exp7 =  $exp8 =  $exp9 =  $exp10 =  "";
	$exp11 =  $exp12 =  $exp13 =  $exp14 =  $exp15 =  "";
	$exp16 =  $exp17 =  $exp18 =  $exp19 =  $exp20 =  "";
	$exp21 =  $exp22 =  $exp23 =  $exp24 =  "";
	$alloted_amount = $r_expected = $reserve_amount = $gp = "";
	$n_o_p = $c_duration = "";
	
	$sum = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['search']))
		{
			if (empty($_POST["product_code"]))
			{
				echo "<script>alert('PRODUCT ID IS REQUIRED!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["product_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else if(empty($_POST["branch_code"]))
			{
				echo "<script>alert('BRANCH CODE Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["branch_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else
			{
				$branch_id = test_input($_POST["branch_code"]);
				$product_id = test_input($_POST["product_code"]);	
			
				$sql="SELECT * FROM estimate_exp WHERE p_id='$product_id' AND b_id='$branch_id'";
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
					$p_id = $row["p_id"];
					$b_id = $row["b_id"];
					
					//$n_o_p = test_input($_POST['n_o_p']);
					//$c_duration = test_input($_POST['c_duration']);
					//$r_expected = $row["return_expected"];
					$alloted_amount = $row["est_budget"];
					//$gp = $row["gross_profit"];
					//$reserve_amount = $row["reserve_amount"];	
					}
				}
			}
	    }
		else
		{
			if (empty($_POST["product_code"]))
			{
				echo "<script>alert('PRODUCT ID IS REQUIRED!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["product_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else
			{
				$exp1=test_input($_POST['exp1']);
				$exp2=test_input($_POST['exp2']);
				$exp3=test_input($_POST['exp3']);
				$exp4=test_input($_POST['exp4']);
				$exp5=test_input($_POST['exp5']);
				$exp6=test_input($_POST['exp6']);
				$exp7=test_input($_POST['exp7']);
				$exp8=test_input($_POST['exp8']);
				$exp9=test_input($_POST['exp9']);
				$exp10=test_input($_POST['exp10']);
				$exp11=test_input($_POST['exp11']);
				$exp12=test_input($_POST['exp12']);
				$exp13=test_input($_POST['exp13']);
				$exp14=test_input($_POST['exp14']);
				$exp15=test_input($_POST['exp15']);
				$exp16=test_input($_POST['exp16']);
				$exp17=test_input($_POST['exp17']);
				$exp18=test_input($_POST['exp18']);
				$exp19=test_input($_POST['exp19']);
				$exp20=test_input($_POST['exp20']);
				$exp21=test_input($_POST['exp21']);
				$exp22=test_input($_POST['exp22']);
				$exp23=test_input($_POST['exp23']);
				$exp24=test_input($_POST['exp24']);
				$product_id=test_input($_POST['product_code']);
				$branch_id=test_input($_POST['branch_code']);
				$alloted_amount = test_input($_POST['alloted_amt']);
				$actual_return = test_input($_POST['re']);
			
				$sql3="SELECT * FROM copy WHERE p_id='$product_id' AND b_id='$branch_id'";
				$result3=mysqli_query($conn,$sql3);
				if (mysqli_num_rows($result3) > 0)
				{
				// output data of each row
					while($row = mysqli_fetch_assoc($result3))
					{
					$n_o_p = $row["n_o_p"];
					$c_duration = $row["c_duration"];
					}
				}
			
		
				$sum = ($exp1 + $exp2 + $exp3 + $exp4 + $exp5 + $exp6 + $exp7 + $exp8 + $exp9 + $exp10 + $exp11 + $exp12 + $exp13 + $exp14 + $exp15 
				 + $exp16 + $exp17 + $exp18 + $exp19 + $exp20 + $exp21 + $exp22 + $exp23 + $exp24);
				 
				$reserve_amount = ($alloted_amount - $sum);
		
				$gp = $actual_return - ($exp1 + $exp2 + $exp3 + $exp4 + $exp5 + $exp6 + $exp7 + $exp8 + $exp9 + $exp10 + $exp11 + $exp12 + $exp13 + $exp14 + $exp15 
				 + $exp16 + $exp17 + $exp18 + $exp19 + $exp20 + $exp21 + $exp22 + $exp23 + $exp24);
		
		
				$sql2="INSERT INTO actual_exp VALUES('".$user_id."','".$exp1."','".$exp2."','".$exp3."','".$exp4."','".$exp5."','".$exp6."','".$exp7."',
												'".$exp8."','".$exp9."','".$exp10."','".$exp11."','".$exp12."','".$exp13."','".$exp14."',
												'".$exp15."','".$exp16."','".$exp17."','".$exp18."','".$exp19."','".$exp20."','".$exp21."',
												'".$exp22."','".$exp23."','".$exp24."','".$actual_return."','".$reserve_amount."','".$gp."','".$product_id."',
												'".$branch_id."','".$alloted_amount."','".$n_o_p."','".$c_duration."')";
												
				//$sql2="INSERT INTO copy VALUES('".$product_id."','".$branch_id."','".$alloted_amount."')";
			
				$result2=mysqli_query($conn,$sql2);
				//$result2=mysqli_query($conn,$sql2);
		
				if($result2)
				{
				echo "<script>alert('Budget Updated Successfully!!!!');</script>";
				}
				else
				{
				echo "<script>alert('Error in preparing Budget!!!!');</script>";
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
</center>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<center>


<table cellpadding = "15">
<tr>
<td><label>Product Code:</label></td><td><input type="text" id="h_textbox" name="product_code" placeholder="" class="textbox" value="<?php echo $p_id ?>" /></td>
<td><label>Branch Code:</label></td><td><input type="text" id="h_textbox" name="branch_code" placeholder="" class="textbox" value="<?php echo $b_id ?>" /></td>
<td><input id="gobutton" type="submit" value="Search" name="search"/></td>
<tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td><label>Alloted Amount:</label></td><td><input type="text"  placeholder="" name="alloted_amt"  id="h_textbox" value="<?php echo $alloted_amount ?>"/></td>
<td><label>Actual Return:</label></td><td><input type="text"  placeholder="" name="re"  id="h_textbox" onchange="calculate2(this.value);"/></td>
<td></td>
</tr>
</table>


</br>
<center>
<div>
  <center>
  <label id="heading1">OPERATING EXPENSES</label>
  <table cellpadding = "15">
  <tr>
	<td><label>Sales Salaries</label></td><td><input type="text" name="exp1" placeholder="" class="textbox2" value="<?php echo $exp1 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Sales Commision<label></td><td><input type="text" name="exp2" placeholder="" class="textbox2" value="<?php echo $exp2 ?>" onchange="calculate2(this.value);"/></td>
  </tr></br>
  <tr>
	<td><label>Tele-Advertising</label></td><td><input type="text" name="exp3" placeholder="" class="textbox2" value="<?php echo $exp3 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Tele-Marketing<label></td><td><input type="text" name="exp4" placeholder="" class="textbox2" value="<?php echo $exp4 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Publicity-Material</label></td><td><input type="text" name="exp5" placeholder="" class="textbox2" value="<?php echo $exp5 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Newpaper-Advertising<label></td><td><input type="text" name="exp6" placeholder="" class="textbox2" value="<?php echo $exp6 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Radio-Advertising</label></td><td><input type="text" name="exp7" placeholder="" class="textbox2" value="<?php echo $exp7 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Direct Mail-Exp<label></td><td><input type="text" name="exp8" placeholder="" class="textbox2" value="<?php echo $exp8 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Pamphlet Printing-Exp</label></td><td><input type="text" name="exp9" placeholder="" class="textbox2" value="<?php echo $exp9 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Magazine Advertising<label></td><td><input type="text" name="exp10" placeholder="" class="textbox2" value="<?php echo $exp10 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Brocher Printing-Exp</label></td><td><input type="text" name="exp11" placeholder="" class="textbox2" value="<?php echo $exp11 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Other Promotional-Exp<label></td><td><input type="text" name="exp12" placeholder="" class="textbox2" value="<?php echo $exp12 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  </table>
  
  
  <label id="heading1">ADMINISTRATIVE EXPENSES</label>
  <table cellpadding = "15">
  <tr>
	<td><label>Casual Labour</label></td><td><input type="text" name="exp13" placeholder="" class="textbox2" value="<?php echo $exp13 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Office Supplies</span><label></td><td><input type="text" name="exp14" placeholder="" class="textbox2" value="<?php echo $exp14 ?>" onchange="calculate2(this.value);"/></td>
  </tr></br>
  <tr>
	<td><label>Store Supplies</label></td><td><input type="text" name="exp15" placeholder="" class="textbox2" value="<?php echo $exp15 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>General Maintenance</span><label></td><td><input type="text" name="exp16" placeholder="" class="textbox2" value="<?php echo $exp16 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Repairs</label></td><td><input type="text" name="exp17" placeholder="" class="textbox2" value="<?php echo $exp17 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Electricity<label></td><td><input type="text" name="exp18" placeholder="" class="textbox2" value="<?php echo $exp18 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Power</label></td><td><input type="text" name="exp19" placeholder="" class="textbox2" value="<?php echo $exp19 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Legal Fees<label></td><td><input type="text" name="exp20" placeholder="" class="textbox2" value="<?php echo $exp20 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Miscellaneous Exp</label></td><td><input type="text" name="exp21" placeholder="" class="textbox2" value="<?php echo $exp21 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>Toll Free Services<label></td><td><input type="text" name="exp22" placeholder="" class="textbox2" value="<?php echo $exp22 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  <tr>
	<td><label>Travel & Training Exp</label></td><td><input type="text" name="exp23" placeholder="" class="textbox2" value="<?php echo $exp23 ?>" onchange="calculate2(this.value);"/></td>
	<td><label>IT Support<label></td><td><input type="text" name="exp24" placeholder="" class="textbox2" value="<?php echo $exp24 ?>" onchange="calculate2(this.value);"/></td>
  </tr>
  </table>
  <input id="gobutton" type="submit" value="Submit" name="submit"/>
</form>
</div>
<table cellpadding = "15">
<tr>
<td><label style="color: red;font-size: 28px;">Reserve Amount:</label></td><td><input type="text" id="h_textbox" name="r_amount" placeholder="" class="textbox" value="<?php echo $reserve_amount ?>"/></td>
<td><label style="color: white;font-size: 28px;">Gross Profit:</label></td><td><input type="text" id="h_textbox" name="g_profit" placeholder="" class="textbox" value="<?php echo $gp ?>"/></td>
</tr>
</table>
</center>
</body>
</html>