
<?php
$nombre = $_POST['nombre'];
$ruc = $_POST['ruc'];
$cantidad = $_POST['cantidad'];


echo "Nombre: ",  $nombre . "<br>";
echo "RUC: ",  $ruc . "<br>";
echo "Cantidad: ",  $cantidad . "<br>";

$subtotal = $cantidad * 2;

echo "SUBTOTAL: ", $subtotal . "<br>";

$iva = $subtotal * 0.12;

echo "IVA: " , $iva . "<br>";

$total = $subtotal + $iva;
echo "TOTAL: " , $total . "<br>";
?>