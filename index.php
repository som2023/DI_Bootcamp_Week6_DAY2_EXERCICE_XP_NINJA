
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_1</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p>Calcul factoriel</p>
    <label for="">Number</label><input type="text" name="nombre" placeholder="entrer un nombre svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
<?php
if (isset($_POST['btnok'])) {
  $nombre = $_POST['nombre'];
  function factorial($nombre1)  
{  
  if($nombre1 <= 1) {  
    return 1;  
  }  
  else{  
    return $nombre1 * factorial($nombre1 - 1);  
  }  
}   
echo "Factorial of $nombre is " .factorial($nombre);
}
  
?>

</body>
</html>