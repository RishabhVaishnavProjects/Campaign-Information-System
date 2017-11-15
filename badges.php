<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap.css">	
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
</head>
<body>
<?php
$product_id = 100;
?>
<div class="container">
  <h2>Badges</h2>
  <label><span class="badge" value="<?php echo $product_id ?>"></span></label><br>
</div>

</body>
</html>
<!--value="<?php echo $product_id 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function f1()
      {
          //alert(document.getElementById("s1").innerHTML)
       document.getElementById("s1").innerHTML=parseInt(document.getElementById("s1").innerHTML)+1; 
      }
  </script>
</head>
<body>


<div class="container">
  <h2>Badges</h2>
  <a href="#">News <span class="badge">5</span></a><br>
  <a href="#">Comments <span class="badge">10</span></a><br>
  <a href="#">Updates <span class="badge" id="s1">2</span></a>
</div>

<button onclick="f1()">click to increase value</button>
   

</body>
</html>