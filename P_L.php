<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<style> 
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
    height: 380px;
}
.number
{
	width: 20.5%;
	height:40px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 1px;
    font-size: 15px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 4px 8px 4px 8px;
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
    background: url(10.jpg);
    background-size: 1360px 900px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
$pc_error = $bc_error = "";
$p_code = $b_code = "";
$n_o_p = $c_duration = "";
$date_o_b = "";



	error_reporting(0);
	session_start();
	$user_id=$_SESSION['username'];
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

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
		die('could not connect'.mysql_error());
}
else
{
	
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
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
			$sql2="DELETE FROM copy where p_id='$record'";
			$result4=mysqli_query($conn,$sql2);
			if($result4)
			{
				echo "<script>alert('RECORD DELETED!!!!');</script>";
				//echo "<script>window.location='http://localhost/OHDC/C_ACCOUNTANT.php'</script>";
			}
			else
			{
				echo "<script>alert('RECORD NOT DELETED!!!!');</script>";	
			}
		}	
	}
	else
	{
		if(empty($_POST["b_code"]))
		{
		echo "<script>alert('PLEASE PROVIDE BRANCH CODE!!!!');</script>";
		}
		else if(!preg_match("/^[0-9]*$/",($_POST["b_code"])))
		{
		echo "<script>alert('Enter only Digits!!!!');</script>";
		}
		else
		{
		$b_code = $_POST['b_code'];
		$sql="SELECT * FROM copy where b_id='$b_code'";
		$result=mysqli_query($conn,$sql);
		}
	}
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

</br></br></br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<center>
<label>Branch Code :&nbsp&nbsp</label><input type="text" name="b_code" placeholder="Enter Branch Code" class="textbox"/>&nbsp&nbsp&nbsp
<input type="submit" id="gobutton" name="search" value="Get List"/>
</center>
</br>
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
			<td><label>{$row['sday']}/{$row['smonth']}/{$row['syear']}</label></td>
			</tr>\n";
			$count = $count + 1;
			}
		}
	}
?>
<tbody>
</table>
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