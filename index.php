<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
require_once 'Fruit.php';

$apple = new Fruit();
$apple->set_name('Apple');

echo $apple->get_name();
// testing 123
?>
</body>
</html>

