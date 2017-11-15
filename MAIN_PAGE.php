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
	 padding-top:1px;
    width: 550px;
    height: 280px;
}

.textbox{
    width: 60%;
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



#heading{
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 35px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 1.4px;
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
    background: url(1.jpg);
    background-size: 1360px 900px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
error_reporting(0);
session_start();
$name=$pass="";
if($_SESSION['name']=='BM')
{
    header("Location: B_MANAGER.php");
}
else if($_SESSION['role']=='CA')
{
	header("Location: C_ACCOUNTANT.php");
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
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$user=$_POST['userid'];//textbox ke naam
		$pass=$_POST['password'];//
		$sql="SELECT * from login where username='$user' and password='$pass'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			while($row = $result->fetch_assoc())
			{
				$role=$row['role'];
				$id=$row['username'];
				$b_code=$row['b_id'];
				//$ind=$row['index3'];
			}
			if($role=='BM')
			{
				$_SESSION['name']="BM";
				$_SESSION['username'] = $user;
				
				header("Location: B_MANAGER.php");
			}
			else if($role=='CA')
			{
				$_SESSION['name']="CA";	
				$_SESSION['username2'] = $user;
				$_SESSION['b_code'] = $b_code;
				header("Location: C_ACCOUNTANT.php");
				/*$sql2="SELECT * from registration where customer_id='$id'";
				$result2=mysqli_query($conn,$sql2);
				if($result2)
				{
					while($row2 = $result2->fetch_assoc())
					{
						$name=$row2['firstname'];
						$id2=$row2['customer_id'];
					}
					$_SESSION['name']=$name;
					$_SESSION['role']='cust';
					$_SESSION['id']=$id2;
					if($ind==1)
					{
						header("Location: firstlog.php");
					}
					else
					{
					header("Location: cust-login.php");
					}
				}*/
				
			}
			else
			{
				 echo "<script>alert('CAN NOT IDENTIFY YOU');</script>";
			}
				
		}
		else
		{
			echo "<script>alert('WRONG USER NAME OR PASSWORD');</script>";
		}
	}
}
?>
<center>
<ul>
  <li><a href="MAIN_PAGE.php">LOGIN</a></li>
  <li><a href="REGISTRATION.php">REGISTER</a></li>
  <li style="float:right"><a href="ABOUT.php">ABOUT</a></li>
</ul>

<!--<img src="pesit-logo.png" height="320px" height="320px"/>--></br></br></br></br></br></br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p style="font-size:35px;background-color:#9DE1F6">&nbsp&nbsp<span id="heading">Campaign Information System<span></p>
  <input type="text" name="userid" placeholder="User Id" class="textbox"></br></br>
  <input type="password" name="password" placeholder="Password" class="textbox"></br></br>
  <input id="gobutton" type="submit" value="Login!" />
</form>
</div>
</center>
</body>
</html>
<!--http://www.cssfontstack.com/-->