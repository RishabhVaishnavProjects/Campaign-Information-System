<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<script src="jquery-3.1.1.min.js"></script>
<style> 
div {
    border-radius: 2px;
	border: 2px solid #73AD21;
    background-color: #B4FAFB;
    background-position: left top;
    background-repeat: repeat;
     padding-left:.2px;
     padding-right:.2px;
	 padding-top:15px;
    width: 780px;
    height: 330px;
}

label{
		font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	<!--font-weight: bold;-->
    display: block;
    color: black;
    <!--text-align: center;-->
    padding: 20px 36px;
    text-decoration: none;
}

.textbox{
    width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 6px 6px 6px 6px;
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
    background: url(10.jpg);
    background-size: 1360px 900px;
    background-repeat: no-repeat;
}
td#data
{
	align:center;
}


.badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:-5px;
   right:-42px;
   font-size:20px;
   background:green;
   color:white;
   width:35px;height:35px;
   text-align:center;
   line-height:35px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
</style>
</head>
<body>
<?php
$pc_error = $bc_error = "";
$p_code = $b_code = "";



error_reporting(0);
session_start();
$b_code=$_SESSION['b_code'];

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
static $count = 0;
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
		die('could not connect'.mysql_error());
}
else
{
	$sql="SELECT * FROM copy where b_id='$b_code'";
	$result=mysqli_query($conn,$sql);
	
	$sql2="SELECT * FROM copy where b_id='$b_code'";
	$result2=mysqli_query($conn,$sql2);
	if($result2)
	{
		$month = date("m");
		$year =  date("Y");
		while($row2 = $result2->fetch_assoc()) 
		{
				$month2 = $row2['emonth'];
				$year2 = $row2['eyear'];
				$p_id = $row2['p_id'];
				
					if(($month2==$month) && ($year2==$year))
					{
					$count++;
					echo '<script>
					$(document).ready(function()
					{
						//var message = 1;
						//document.getElementById("s1").innerHTML=message;
						var node2 = document.getElementById("notification");
						var node = document.getElementById("mask123");
						node2.style.visibility = "visible";
						node.style.visibility = "visible";
						//alert("BUDGET OF THE PRODUCT WITH ID: "+<?php print($p_id);?>+"  HAS TO BE UPDATED!!!!!");
					});
					</script>';
					}
				
		}
	}
	
}
?>
<script>
function function1()
{
	alert("BUDGET OF THE PRODUCT WITH ID: "+<?php print($p_id);?>+"  HAS TO BE UPDATED!!!!!");
	var node = document.getElementById("mask123");
	var node2 = document.getElementById("notification");
	node.style.visibility = "hidden";
	node2.style.visibility = "hidden";
}
</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "<script>alert('jhjh');</script>";
	if(isset($_POST['submit']))
	{
		if (empty($_POST["delete"]))
		{
			echo "<script>alert('PLEASE PROVIDE PRODUCT ID!!!!');</script>";
			//$pc_error = "Required";
		}
		else
		{
			
			$record = $_POST['delete'];
			$sql3="DELETE FROM copy where p_id='$record'";
			$result4=mysqli_query($conn,$sql3);
			if($result4)
			{
				echo "<script>alert('RECORD DELETED!!!!');</script>";
				echo "<script>window.location='http://localhost/OHDC/C_ACCOUNTANT.php'</script>";
			}
			else
			{
				echo "<script>alert('RECORD NOT DELETED!!!!');</script>";	
			}
		}	
	}
}
?>
<center>
<ul>
  <li><a href="C_ACCOUNTANT.php">PRODUCT'S</a></li>
  <li><a href="UPDATE.php">UPDATE</a></li>
  <li><a href="C_ESTIMATE.php">ESTIMATES</a></li>
  <li><a href="C_REPORT.php">REPORT</a></li>
  <li>
	<a href="#" onclick="function1()" style="visibility:hidden;" id="notification">NOTIFICATION<span class="badge1" style="visibility:hidden;" data-badge="!" id="mask123"></span></a>
  </li>
  <li style="float:right"><a href="LOGOUT.php">LOG OUT</a></li>
</ul>

</br></br></br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table cellpadding="14" border="1">
<thead>
	<tr>
		<th><label>PRODUCT CODE</label></th><th><label>BUDGET AMOUNT</label></th><th><label>PRODUCT NAME</label></th><th><label>DURATION</label></th><th><label>DATE</label></th>
	</tr>
</thead>
<tbody>
<?php
$count = 1;
if($result)
	{
		while($row = $result->fetch_assoc()) 
		{
			if($count<=4)
			{
			echo
			"<tr>
            <td><label><center>{$row['p_id']}</center></label></td>
            <td><label><center>{$row['b_amount']}</center></label></td>
            <td><label><center>{$row['n_o_p']}</center></label></td>
			<td><label><center>{$row['c_duration']}</center></label></td>
			<td><label>{$row['sday']}/{$row['smonth']}/{$row['syear']}<label></td>
			</tr>\n";
			$count = $count + 1;
			}
		}
	}
	else
	{
		echo "<script>alert('NO RECORDS FOUND!!!!');</script>";
	}	
?>
<tbody>
</table>
</br>
</div>

<table cellpadding="10">
<tr>
<td><label>Delete the Record:</label></td><td><input type="text" name="delete" class="textbox" placeholder="PRODUCT ID"/></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr>
</table>
<center><input id="gobutton" type="submit" value="Delete" name="submit"/><center>
</form>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->