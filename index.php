<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baker</title>
</head>
<body>
  <?php
    // $name = "Krystian";
    // echo "$name, welcome on website!";
    // echo '<img src="image.jpg"/>';
    // echo $name.', welcome on website!';
  ?>
  <h1>Online orders</h1>

  <form action="order.php" method="post">
    How many donuts (0.99 PLN/pcs):
    <input type="text" name="donuts"/>
    <br/><br/>
    How many sweet comb (1.29 PLN/pcs)
    <input type="text" name="sweetCombs"/>
    <br/><br/>
    <input type="submit" value="Send order"/>
  </form>
</body>
</html>