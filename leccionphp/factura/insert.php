<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$total=$_POST["total"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($descripcion) . '!';
echo 'Hola ' . htmlspecialchars($total) . '!';

include_once("FacturaCollector.php");

$FacturaCollectorobj = new FacturaCollector();
$FacturaCollectorobj->createFactura($descripcion, $total);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
