<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<?php
$var = 40;
?>
<script>
  var sgpe = '<?php echo $var;?>';
  
  window.onload = function ()
  {
      //alert(document.getElementById("s1").innerHTML)
       document.getElementById("s1").innerHTML=sgpe;
       //parseInt(document.getElementById("s1").innerHTML)+1;	   
      }
  </script>
<div class="container">
  <h2>Badges</h2>
  <a href="#">News <span class="badge">5</span></a><br>
  <a href="#">Comments <span class="badge">10</span></a><br>
  <a href="#">Updates <span class="badge" id="s1"></span></a>
</div>

<!--<button onclick="f1()">click to increase value</button>-->
   

</body>
</html>
<!--<div class="container">
  <h2>Badges</h2>
  <a href="#">News <span class="badge">5</span></a><br>
  <a href="#">Comments <span class="badge">10</span></a><br>
  <a href="#">Updates <span class="badge" id="s1">2</span></a>
</div>-->