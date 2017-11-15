<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery-3.1.1.slim.js">
<style> 
#div2{
    border-radius: 6px;
	background-color: #B4FAFB;
    position:relative;
	top:25%;
	left:18%;
    background-position: left top;
    background-repeat: repeat;
	padding-left:10px;
	padding-right:10px;
	padding-top:5px;
    width: 850px;
    height: 600px;    
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
<center>
<ul>
  <li><a href="MAIN_PAGE.php">LOGIN</a></li>
  <li><a href="REGISTRATION.php">REGISTER</a></li>
  <li style="float:right"><a href="ABOUT.PHP">ABOUT</a></li>
</ul>
</center>
</br></br></br>
<div id="div2">
<p style="font-size:22px;background-color:#9DE1F6">&nbsp&nbsp<span style="color:grey">Campaign Informatin System<span></p>
<p style="float:left">* Campaign Informatin System is a Web Application basically designed for the Branch Managers and the Chief Accountants of any 
branch of any Insurance Company
</p>
<p>
* Their are two types of accounts available in the application :</br>
1)Branch Manager</br>
2)Chief Accountant
</p>

<p>*Functionalites in the Branch Manager Module:</br>
1)Budgeting.</br>
2)Comparison of performance of two different products.</br>
3)Ascertaining the difference between actual and estimated budgets.</br>
</p>

<p>*Functionalites in the Chief Accountant Module:</br>
1)To Update the Actual Expenses incurred to promote the product.</br>
2)To Make Estimates so as to improve the Performace of the product.</br>
</p>
<p>
*The Utilities  of application:-</br>
1)To Control the performance of the product at branch level.</br>
2)To Calculate the perormance difference of different product launched By Companies.</br>
3)To Give an efficient tool to make promotional budgets for the new product's launched by the Companies.</br>
4)To Comapare the Estimated and Actual budgeted Amounts.</br>
5)Uses accounting tools for evaluating the promotional methods used in promoting the product.</br>
6)To hellp examining where the changes are required to make the product profitable.</br>
7)The application is useful for study and analyze the increase and decrease in the promotional expenses incurred  against the budgeted expenses to
 promote the product as well as the return expected and the actual return earned.</br>
8)Application will be help full for insurance companies officials who are directly involved in promoting and executing the policies plans at branch level.</br>
9)Application will give insight to the increase and decrease of the expenses ,returns and profit etc.</br>
</p>
</div>

</br>
</br>
</br>
</body>
</html>
<!--http://www.cssfontstack.com/-->