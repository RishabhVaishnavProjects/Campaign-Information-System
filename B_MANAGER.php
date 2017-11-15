<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<style> 
div {
    border-radius: 2px;
	border: 4px solid #73AD21;
    background-color: #B4FAFB;
    background-position: left top;
    background-repeat: repeat;
     padding-left:.2px;
     padding-right:.2px;
	 padding-top:35px;
    width: 450px;
    height: 350px;
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
	
	

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['submit']))
	{
		if (empty($_POST["product_code"]))
			{
				echo "<script>alert('Product code is  Required!!!!');</script>";
				//$pc_error = "Required";
			}
		else if(empty($_POST["branch_code"]))
			{
				echo "<script>alert('Branch code is  Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(empty($_POST["day"]))
			{
				echo "<script>alert('Day is  Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(empty($_POST["month"]))
			{
				echo "<script>alert('Month  is  Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(empty($_POST["year"]))
			{
				echo "<script>alert('Year is  Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(empty($_POST["n_o_p"]))
			{
				echo "<script>alert('Name of Product is  Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(empty($_POST["c_duration"]))
			{
				echo "<script>alert('Campaign Duration is Required!!!!');</script>";
				//$bc_error = "Required";
			}
		else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["n_o_p"])))
			{
				echo "<script>alert('Enter only Text!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["product_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["branch_code"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["day"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["month"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["year"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else if(!preg_match("/^[0-9]*$/",($_POST["c_duration"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
		else
			{
				$p_code = test_input($_POST["product_code"]);
				$bc_code = test_input($_POST["branch_code"]);
				$n_o_p = test_input($_POST["n_o_p"]);
				$c_duration = test_input($_POST["c_duration"]);//date_o_b
				$day = test_input($_POST["day"]);
				$month = test_input($_POST["month"]);
				$year = test_input($_POST["year"]);
				
				session_start();
				$_SESSION['product_id'] = $p_code;
				$_SESSION['branch_id'] = $bc_code;
				$_SESSION['n_o_p'] = $n_o_p;
				$_SESSION['c_duration'] = $c_duration;
				$_SESSION['day'] = $day;
				$_SESSION['month'] = $month;
				$_SESSION['year'] = $year;
				$_SESSION['username2'] = $user_id;
				
				//CODE FOR END DATE
				$y = $year;
				$i;
				$duration = $c_duration;
				$month2 = $month;
				$j;
				for($i=1;$i<$duration;$i++)
					{
						if($month2<12)
						{
							$month2 = $month2 + 1;
						}
						else
						{
							$month2 = 0;
							$y++;
								for($j = $i;$j<$duration;$j++)
								{
									$month2++;
								}
							break;
						}
					}
				
				$_SESSION['month2'] = $month2;
				$_SESSION['year2'] = $y;
				
				header("Location: BUDGET.php");
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

</br></br></br></br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="text" name="product_code" placeholder="Product Code" class="textbox" value="<?php echo isset($_POST['pc']) ? $_POST['pc'] : '' ?>"/></br></br>
  
  <input type="text" name="branch_code" placeholder="Branch Code" class="textbox" value="<?php echo isset($_POST['bc']) ? $_POST['bc'] : '' ?>"/></br></br>
  
  <input type="number" max="31" min="1" placeholder="Date"  class="number" name="day"/>&nbsp&nbsp&nbsp
  <input type="number" max="12" min="1" placeholder="Month" class="number" name="month"/>&nbsp&nbsp&nbsp
  <input type="number" max="2030" min="2017" placeholder="Year" class="number" name="year"/>
  </br></br>
  
  
  <input type="text" name="n_o_p" placeholder="Name of Product" class="textbox" value="<?php echo isset($_POST['nop']) ? $_POST['pc'] : '' ?>"/></br></br>
  
  <input type="text" name="c_duration" placeholder="Campaign Duration(in months)" class="textbox" value="<?php echo isset($_POST['cd']) ? $_POST['bc'] : '' ?>"/></br></br>
  
  <input id="gobutton" type="submit" value="Submit" name="submit"/>
</form>
</div>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->