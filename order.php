<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Podsumowanie zamówienia</title>
</head>
<body>
  <?php 
    $donuts = $_POST['donuts'];
    //$donuts = $_GET['donuts'];
    $sweetComb = $_POST['sweetCombs'];
    //1
    echo "<h2>$donuts $sweetComb</h2>";
  ?>
</body>
</html>