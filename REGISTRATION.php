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
    height: 500px;    
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
		
	$fname = $lname = $address = $emai_id = $user_type = $com_name = $emp_id = $branch_id = $email_id = "";
	$username = $usertype = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
			if(isset($_POST['submit']))
			{
				if (empty($_POST["fn"]))
				{
				echo "<script>alert('First Name is  Required!!!!');</script>";
				//$pc_error = "Required";
				}
				else if(empty($_POST["ln"]))
				{
				echo "<script>alert('Last Name is  Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["address"]))
				{
				echo "<script>alert('Address is Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["companies"]))
				{
				echo "<script>alert('SELECT Company !!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["users"]))
				{
				echo "<script>alert('USER TYPE is  Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["eid"]))
				{
				echo "<script>alert('Employee ID is  Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["bcode"]))
				{
				echo "<script>alert('Branch Code is Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["email"]))
				{
				echo "<script>alert('Email ID is Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["fn"])))
				{
				echo "<script>alert('Enter only Text for First Name!!!!');</script>";
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["ln"])))
				{
				echo "<script>alert('Enter only Text for Last Name!!!!');</script>";
				}
				else if(!preg_match("/^[0-9]*$/",($_POST["eid"])))
				{
				echo "<script>alert('Enter only Digits for Emplyee Id!!!!');</script>";
				}
				else if(!preg_match("/^[0-9]*$/",($_POST["bcode"])))
				{
				echo "<script>alert('Enter only Digits for Branch Code!!!!');</script>";
				}
				else if(!filter_var(($_POST["email"]),FILTER_VALIDATE_EMAIL))
				{
				echo "<script>alert('Type valid email format!!!!');</script>";
				}
				else
				{
					$fname = test_input($_POST['fn']);
					$lname = test_input($_POST['ln']);
					$address = test_input($_POST['address']);
					$com_name = test_input($_POST['companies']);
					$user_type = test_input($_POST['users']);
					$emp_id = test_input($_POST['eid']);
					$branch_id = test_input($_POST['bcode']);
					$email_id = test_input($_POST['email']);
			
		
					$sql="INSERT INTO registeration(fname,lname,cname,utype,eid,bcode,address,email) VALUES('".$fname."','".$lname."','".$com_name."','".$user_type."','".$emp_id."','".$branch_id."','".$address."','".$email_id."')";
					$result = mysqli_query($conn,$sql);
					echo "<script>alert('DATA COLLECTED SUCCESSFULLY!!!!');</script>";
					if($result)
					{
						$sql2 = "SELECT * from registeration where eid = '$emp_id'";
						$result2 = mysqli_query($conn,$sql2);
						if($result2)
						{
							while($row2 = $result2->fetch_assoc())
							{
								$username = $row2['username'];
								$usertype = $row2['utype'];
								$b_code = $row2['bcode'];
						
								//echo "<script>alert('$username');</script>";
								//echo "<script>alert('$usertype');</script>";
						
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['utype'] = $usertype;
								$_SESSION['b_code'] = $b_code;
								echo "<script>window.location='http://localhost/OHDC/PASSWORD.php'</script>";
								//header("Location: PASSWORD.php");
							}
						}
					}
					else
					{
					echo "<script>alert('ERROR IN COLLECTING DATA!!!!');</script>";
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
  <li><a href="MAIN_PAGE.php">LOGIN</a></li>
  <li><a href="REGISTRATION.php">REGISTER</a></li>
  <li style="float:right"><a href="ABOUT.php">ABOUT</a></li>
</ul>
</br>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table>
  <tr>
  <td><label>First Name:-<label></td><td><input type="text"  placeholder="Enter Only Text" class="textbox" name="fn"></td>
  </tr>
  <tr>
  <td><label>Last Name:-<label></td><td><input type="text"  placeholder="Enter Only Text" class="textbox" name="ln"></td>
  </tr>
  <tr>
  <td><label>Company Name:-</label></td>
  <td>
   <select name="companies">
   <option selected="selected">Select From Menu</option>
   <option value="LIC">LIC</option>
   <option value="TATA_AIG">TATA AIG</option>
   <option value="BAJAJ_ALLIANZ">BAJAJ ALLIANZ</option>
   <option value="HDFC">HDFC</option>
   <option value="ICICI">ICICI</option>
   <option value="OTHER">OTHER</option>
   </select>
  </td>
  </tr>
  <tr>
  <td><label>User Type:-<label></td>
  <td>
   <select name="users">
   <option selected="selected">Select From Menu</option>
   <option value="BM">BRANCH MANAGER</option>
   <option value="CA">CHEIF ACCOUNTANT</option>
   </select>
  </td>
  </tr>
  <tr>
  <td><label>Employee Id:-</label></td><td><input type="text"  placeholder="Enter Only Numbers" class="textbox" name="eid"></td>
  </tr>
  <tr>
  <td><label>Branch Code:-</label></td><td><input type="text"  placeholder="Enter Only Numbers" class="textbox" name="bcode"></td>
  </tr>
  <tr>
  <td><label>Address:-</label></td><td><textarea name="address"></textarea></td>
  </tr>
  <tr>
  <td><label>Email-Id:-</label></td><td><input type="text"  placeholder="Enter Only Email-Id" class="textbox" name="email"></td>
  </tr>
  </table>
  </br></br></br>
  <input id="gobutton" type="submit" value="Submit" name="submit"/>
</form>
</div>
</center>
</body>
</html>