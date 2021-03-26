<?php
//datos que llegan por POST------------------------------------------------------------------------------------------------------------------>


if (isset($_POST['modulo'])) 
   {$modulo=$_POST['modulo'];}

if (isset($_POST['Borde'])) 
   {$bordes=$_POST['Borde'];}

if (isset($_POST['largo'])) 
   {$largo=$_POST['largo'];}

if (isset($_POST['ancho'])) 
   {$ancho=$_POST['ancho'];}   


$ma="";
$mb="";
?>

<?php include 'largo.php';?>
<?php include 'dibujo.php';?>


