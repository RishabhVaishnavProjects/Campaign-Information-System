<!DOCTYPE html>
<html>
<head>
<script>
var total;
var k;
var totexp = 0;
var expenses = 0;
var done = new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1);
var value = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
function calculate(tamount) {
	total = parseFloat(tamount);
		if(total <= 0 )
		{
			alert("PLEASE PROVIDE POSITIVE VALUE");
		}
        function_two(total,expenses);
    }

function function_two(tamount,expenses){
  a = tamount;
  b = expenses;
  r = a - b;
  document.getElementById('netamount').innerHTML = r;
  document.getElementById('exp').innerHTML = "(-)"+b;
  document.getElementById('totamt').innerHTML = a;
  //alert(r);
}

function calculate2(expenses,no)
{       var result = document.getElementById("h_textbox2").value;
		if(done[no]==-1)
		{
			done[no]=no;
			value[no]=parseFloat(expenses);
			exp2 = parseFloat(expenses);
			if(exp2 < 0)
			{
				alert("PLEASE PROVIDE POSITIVE VALUES FOR EXPENSES");
			}
			else
			{
			amt = parseFloat(result);
			totexp=totexp + exp2;
			function_two(amt,totexp);
			}
		}
		else
		{
			totexp-=value[no];
			exp2 = parseFloat(expenses);
			if(exp2 < 0)
			{
				alert("PLEASE PROVIDE POSITIVE VALUES FOR EXPENSES");
			}
			else
			{
			amt = parseFloat(result);
			totexp=totexp + exp2;
			value[no]=exp2;
			function_two(amt,totexp);
			}
		}
}
</script>
<script type="text/javascript">
i=1;
total=0;
window.onload = function () {
	chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Distribution Of Expenses"
		},
		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: true,
			legendText: "{indexLabel}",
			dataPoints: [
				{y:100, indexLabel:"Alloted Amount"}
			]
		}
		]
	});
	chart.render();
}
function checknull(value,name)
{
	if(value < 0)
	{
		alert("PIE CHART CAN'T BE CREATED BECAUSE OF NEGATIVE VALUE");
	}
	else
	{
		if(value!=""&&name!="allt_amt")
		{
		addjson(value,name);
		}
		if(value!=""&&name=="allt_amt")
		{
		total=parseInt(value);
		}
	}
}
function addjson(value,name)
{
	value=(value/total)*100;
	rem = chart.data[0].dataPoints[0];
	rem.y-=value;
	ind=nameexists(name,i);
	if(ind==-1)
	{
		obj = {y:parseInt(value), indexLabel:name};
		chart.data[0].dataPoints[i]=obj;
		i++;
		chart.render();
	}
	else
	{
		rem.y+=chart.data[0].dataPoints[ind].y;
		chart.data[0].dataPoints[ind].y=value;
		chart.render();
	}
}
function nameexists(name1,i)
{
	j=0;
	for(j=0;j<i;j++)
	{
		if(chart.data[0].dataPoints[j].indexLabel==name1)
			return j;
	}
		return -1;
}
</script>
<script type="text/javascript" src="canvasjs.min.js"></script>
<script src="angular.min.js"></script>
<style> 
#div1 {
	float:left;
    border-radius: 1px;
	border: 2px solid blue;
	<!--background-color: #c0c0ee;-->
    background-position: left top;
    background-repeat: repeat;
     padding-left:-50px;
     padding-right:.2px;
	 padding-top:5px;
    width: 650px;
    height: 885px;
}
#div2 {
	float:right;
    border-radius: 1px;
	border: 2px solid blue;
	<!--background-color: #B4FAFB;-->
    background-position: left top;
    background-repeat: repeat;
     padding-left:-50px;
     padding-right:.2px;
	 padding-top:5px;
    width: 650px;
    height: 410px;
}
#chartContainer
{
	height: 400px; width: 95%;	
}
#div3
{
	position:absolute;
	top:95%;
	left:57%;
	border-radius: 1px;
	border: 2px solid blue;
	background-color:#B4FAFB;
	height:300px;
	width:500px;
}
#h_textbox{
    width: 80%;
    box-sizing: border-box;
    border: 1px solid;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
	background-color:transparent;
}
#h_textbox2
{
	width: 80%;
    box-sizing: border-box;
    border: 1px solid;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
	background-color:transparent;
}
.textbox{
    width: 20%;
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
    width: 150px;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 20px;
}



.textbox2:focus {
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
    <!--padding: 20px 36px;-->
    text-decoration: none;
}
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

body
{
    background: url(3.jpg);
    background-size: 1600px 1550px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
error_reporting(0);
session_start();
$product_id=$_SESSION['product_id'];
$branch_id=$_SESSION['branch_id'];
$n_o_p=$_SESSION['n_o_p'];
$c_duration=$_SESSION['c_duration'];

$day=$_SESSION['day'];
$month=$_SESSION['month'];
$year=$_SESSION['year'];
$month2=$_SESSION['month2'];
$year2=$_SESSION['year2'];

$user_id=$_SESSION['username2'];
//echo $product_id.'</br>';
//echo $branch_id.'</br>';
if(!isset($_SESSION['name']))
	{
		echo "<script>alert('PLEASE LOGIN FIRST');</script>";
        //echo "window.location='MAIN_PAGE.php'";
		header("Location: MAIN_PAGE.php");
	}

	
	
	
	
	
//Main calculation Code:-	


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
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	  if(empty($_POST["allt_amt"]))
	  {
		echo "<script>alert('PLEASE PROVIDE ALLOTED AMOUNT!!!!');</script>";
	  }
	  else if(empty($_POST["re"]))
	  {
		echo "<script>alert('PLEASE PROVIDE EXPECTED RETURN!!!!');</script>";
	  }
	  else if(!preg_match("/^[0-9]*$/",($_POST["allt_amt"])))
	  {
		echo "<script>alert('Enter only Digits!!!!');</script>";
	  }
	  else
	  {
		$exp1 =  $exp2 =  $exp3 =  $exp4 =  $exp5 =  0;
		$exp6 =  $exp7 =  $exp8 =  $exp9 =  $exp10 =  0;
		$exp11 =  $exp12 =  $exp13 =  $exp14 =  $exp15 =  0;
		$exp16 =  $exp17 =  $exp18 =  $exp19 =  $exp20 =  0;
		$exp21 =  $exp22 =  $exp23 =  $exp24 =  0;
		$alloted_amount = $r_expected = $reserve_amount = $gp = 0;
		$sum = 0;
		
		$exp1=test_input($_POST['Salaries']);
		$exp2=test_input($_POST['Commision']);
		$exp3=test_input($_POST['Tele-Advertising']);
		$exp4=test_input($_POST['Tele-Marketing']);
		$exp5=test_input($_POST['Publicity-Material']);
		$exp6=test_input($_POST['Newpaper-Advertising']);
		$exp7=test_input($_POST['Radio-Advertising']);
		$exp8=test_input($_POST['Mail-Exp']);
		$exp9=test_input($_POST['Printing-Exp']);
		$exp10=test_input($_POST['Magazine-Advertising']);
		$exp11=test_input($_POST['Brocher-Exp']);
		$exp12=test_input($_POST['Promotional-Exp']);
		$exp13=test_input($_POST['Labour']);
		$exp14=test_input($_POST['Office']);
		$exp15=test_input($_POST['Store']);
		$exp16=test_input($_POST['Maintenance']);
		$exp17=test_input($_POST['Repairs']);
		$exp18=test_input($_POST['Electricity']);
		$exp19=test_input($_POST['Power']);
		$exp20=test_input($_POST['Fees']);
		$exp21=test_input($_POST['Miscellaneous']);
		$exp22=test_input($_POST['Services']);
		$exp23=test_input($_POST['Travel&Training']);
		$exp24=test_input($_POST['IT-Support']);
		$alloted_amount = test_input($_POST['allt_amt']);
		$r_expected = $_POST['re'];
		
		$sum = ($exp1 + $exp2 + $exp3 + $exp4 + $exp5 + $exp6 + $exp7 + $exp8 + $exp9 + $exp10 + $exp11 + $exp12 + $exp13 + $exp14 + $exp15 
				 + $exp16 + $exp17 + $exp18 + $exp19 + $exp20 + $exp21 + $exp22 + $exp23 + $exp24);
				 
		$reserve_amount = ($alloted_amount - $sum);
		
		$profit = $sum*($r_expected/100);
		$return_amount = ($profit + $sum);
		
		$gp = ($return_amount - ($exp1 + $exp2 + $exp3 + $exp4 + $exp5 + $exp6 + $exp7 + $exp8 + $exp9 + $exp10 + $exp11 + $exp12 + $exp13 + $exp14 + $exp15 
				 + $exp16 + $exp17 + $exp18 + $exp19 + $exp20 + $exp21 + $exp22 + $exp23 + $exp24));
		
		
		$sql="INSERT INTO estimate_exp VALUES('".$user_id."','".$exp1."','".$exp2."','".$exp3."','".$exp4."','".$exp5."','".$exp6."','".$exp7."',
												'".$exp8."','".$exp9."','".$exp10."','".$exp11."','".$exp12."','".$exp13."','".$exp14."',
												'".$exp15."','".$exp16."','".$exp17."','".$exp18."','".$exp19."','".$exp20."','".$exp21."',
												'".$exp22."','".$exp23."','".$exp24."','".$r_expected."','".$reserve_amount."','".$gp."','".$product_id."',
												'".$branch_id."','".$alloted_amount."','".$n_o_p."','".$c_duration."'
												,'".$day."','".$month."','".$year."','".$month2."','".$year2."')";
												
		$sql2="INSERT INTO copy VALUES('".$product_id."','".$branch_id."','".$alloted_amount."','".$n_o_p."','".$c_duration."','".$day."','".$month."','".$year."','".$month2."','".$year2."')";
			
		$result=mysqli_query($conn,$sql);
		$result2=mysqli_query($conn,$sql2);
		
		if($result)
		{
			echo "<script>alert('Budget Prepared Successfully!!!!');</script>";
			
		}
		else
		{
			echo "<script>alert('Error in preparing Budget!!!!');</script>";
			
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
</center>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<center>
<table cellpadding = "15">
<tr>
<td><label>Product Code:</label></td><td><input type="text" id="h_textbox" name="product_code" placeholder="" class="textbox" value="<?php echo $product_id ?>"/></td><!--onkeydown,onkeypress,oninput,onhaschange,onformchange,onfocus,onchange-->
<td><label>Branch Code:</label></td><td><input type="text" id="h_textbox" name="branch_code" placeholder="" class="textbox" value="<?php echo $branch_id ?>""/></td>
<td><label>Alloted Amount:</label></td><td><input type="text" id="h_textbox2" name="allt_amt" placeholder="" onblur="checknull(this.value,this.name)" onchange="calculate(this.value);" class="textbox" ng-model="tamount"/></td>
</tr>
</table>
</center>
<!--allt_amt-->

</br></br>
<center>
<div id="div1" ng-app="">

  <label id="heading1">OPERATING EXPENSES</label>
  <table cellpadding = "5"  style="float:left">
  <tr>
	<td><label>Sales Salaries</label></td><td><input type="text" name="Salaries" placeholder=""  class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,1);"></td>
	<td><label>Sales Commision</label></td><td><input type="text" name="Commision" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,2);"></td>
  </tr></br>
  <tr>
	<td><label>Tele-Advertising</label></td><td><input type="text" name="Tele-Advertising" onblur="checknull(this.value,this.name)" class="textbox2" onchange="calculate2(this.value,3);" /></td>
	<td><label>Tele-Marketing</label></td><td><input type="text" name="Tele-Marketing"  class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,4);" /></td>
  </tr>
  <tr>
	<td><label>Publicity-Material</label></td><td><input type="text" name="Publicity-Material" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,5);" /></td>
	<td><label>Newpaper-Advertising</label></td><td><input type="text" name="Newpaper-Advertising" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,6);" /></td>
  </tr>
  <tr>
	<td><label>Radio-Advertising</label></td><td><input type="text" name="Radio-Advertising" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,7);" /></td>
	<td><label>Direct Mail-Exp</label></td><td><input type="text" name="Mail-Exp" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,8);"/></td>
  </tr>
  <tr>
	<td><label>Pamphlet Printing-Exp</label></td><td><input type="text" name="Printing-Exp" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,9);"/></td>
	<td><label>Magazine Advertising</label></td><td><input type="text" name="Magazine-Advertising" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,10);"/></td>
  </tr>
  <tr>
	<td><label>Brocher Printing-Exp</label></td><td><input type="text" name="Brocher-Exp" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,11);" /></td>
	<td><label>Other Promotional-Exp</label></td><td><input type="text" name="Promotional-Exp" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,12);"/></td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  </table>
  
  
  <label id="heading1" >ADMINISTRATIVE EXPENSES</label>
  <table cellpadding = "5"  style="float:left">
  <tr>
	<td><label>Casual Labour</label></td><td><input type="text" name="Labour" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,13);" /></td>
	<td><label>Office Supplies</label></td><td><input type="text" name="Office" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,14);" /></td>
  </tr></br>
  <tr>
	<td><label>Store Supplies</label></td><td><input type="text" name="Store" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,15);" /></td>
	<td><label>General Maintenance</label></td><td><input type="text" name="Maintenance" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)"  onchange="calculate2(this.value,16);"/></td>
  </tr>
  <tr>
	<td><label>Repairs</label></td><td><input type="text" name="Repairs" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,17);" /></td>
	<td><label>Electricity</label></td><td><input type="text" name="Electricity" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,18);" /></td>
  </tr>
  <tr>
	<td><label>Power</label></td><td><input type="text" name="Power" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,19);" /></td>
	<td><label>Legal Fees</label></td><td><input type="text" name="Fees" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,20);" /></td>
  </tr>
  <tr>
	<td><label>Miscellaneous Exp</label></td><td><input type="text" name="Miscellaneous" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,21);" /></td>
	<td><label>Toll Free Services</label></td><td><input type="text" name="Services" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,22);" /></td>
  </tr>
  <tr>
	<td><label>Travel & Training Exp</label></td><td><input type="text" name="Travel&Training" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,23);" /></td>
	<td><label>IT Support</label></td><td><input type="text" name="IT-Support" placeholder="" class="textbox2" onblur="checknull(this.value,this.name)" onchange="calculate2(this.value,24);" /></td>
  </tr>
  <tr>
	<td><label>Amount of Return Expected:</label></td><td><input type="number" min="1" name="re" placeholder="" class="textbox2" /></td>
  </tr>
  </table>
  </br>
  </br>
  <input id="gobutton" type="submit" value="Submit" name="submit"/>
</form>


</div>
</br>


<div id="div2">
	<div id="chartContainer">
	</div>
</div>

<div id="div3">
<label style="position:absolute;top:5%;left:2%;">ALLOTED AMOUNT:</label><label style="position:absolute;top:5%;left:79%;" id="totamt"></label></br>
<label style="position:absolute;top:15%;left:2%;">EXPENSES:</label><label style="position:absolute;top:15%;left:75%;" id="exp"></label></br>
<label style="position:absolute;top:19%;left:75%;">_________</label>
<label style="position:absolute;top:27%;left:2%;">NET AMOUNT:</label><label style="position:absolute;top:27%;left:79%;" id="netamount"></label></br>
<label style="position:absolute;top:40%;right:1%;">_____________________________________________</label>
<label style="position:absolute;top:58%;left:2%;">RESERVE AMOUNT</label>
<input type="text"  name="r_amount"  value="<?php echo $reserve_amount ?>" style="position:absolute;top:58%;left:60%;height:25px;font-size:20px;width:120px;background-color:transparent;border:0px solid;"/>
<label style="position:absolute;top:78%;left:2%;">GROSS PROFIT</label>
<input type="text" name="g_profit" style="position:absolute;top:78%;left:60%;height:25px;font-size:20px;width:120px;background-color:transparent;border:0px solid;" value="<?php echo $gp ?>"/>

</div>

</body>
</html>
<!--http://www.cssfontstack.com/-->