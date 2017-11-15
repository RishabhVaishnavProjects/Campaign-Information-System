<!DOCTYPE html>
<html>
<head>
<style> 
h1 {
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 50px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
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



select{
	width: 140%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 6px 10px 6px 20px;
}
select:focus {
	background-color: lightblue;
}
.textbox{
    width: 140%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 6px 10px 6px 20px;
}
.textbox:focus {
    background-color: lightblue;
}
label{
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}




textarea {
    width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}



div{
    border-radius: 2px;
    border: 4px solid #73AD21;
    background-color: #de8d66;
    background-position: left top;
    background-repeat: repeat;
	padding-top:20px;
    padding-left:.10px;
    padding-right:80px;
    width: 500px;
    height: 200px;    
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

</style>
</head>
<body>
<?php
error_reporting(0);
session_start();
$user_id=$_SESSION['username'];
$u_type=$_SESSION['utype'];
$b_code=$_SESSION['b_code'];

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
			$password1 = $password2 = "";
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			if($password1 == $password2)
			{
			echo "<script>alert('PASSWORD HAS BEEN SET!!!!');</script>";
			$sql="INSERT INTO login VALUES('".$user_id."','".$password2."','".$u_type."','".$b_code."')";
			$result = mysqli_query($conn,$sql);
				if($result)
				{
					echo "<script>window.location='http://localhost/OHDC/MAIN_PAGE.php'</script>";
					//header("Location: MAIN_PAGE.php");
				}
			}
			else
			{
				echo "<script>alert('PASSWORD DOEST MATCH!!!!');</script>";
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
</br>
</br>
</br>
</br>
</br>
</br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table>
  <tr>
  <td><label>Your Id:-<label></td><td><input type="text"  placeholder="" class="textbox" name="fn" value="<?php echo $user_id ?>"></td>
  </tr>
  <tr>
  <td><label>Enter Password:-</label></td>
  <td><input type="password" name="password1" placeholder="Password" class="textbox"></td>
  </tr>
  <tr>
  <td><label>Re-Enter Password:-</label></td>
  <td><input type="password" name="password2" placeholder="Password" class="textbox"></td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  <td></td><td><input id="gobutton" type="submit" value="Submit" /></td>
  </tr>
  </table>
</form>
</div>
</center>
</body>
</html>