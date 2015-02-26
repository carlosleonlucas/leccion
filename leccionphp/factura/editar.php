<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$total=$_POST["total"];
$idfactura=$_POST["idfactura"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->updateFactura($idfactura,$descripcion,$total);

echo "id :".$idfactura." actualizado a:".$descripcion." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
