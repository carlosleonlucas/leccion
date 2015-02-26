<html>
<head>
</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioFacturaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($FacturaCollectorObj->readFactura() as $objetoaux){
  echo "<tr>";
  echo "<td>".$objetoaux->getIdFactura() ."</td>";
  echo "<td>".$objetoaux->getDescripcion()."</td>";
  echo "<td>".$objetoaux->getTotal()."</td>";
  echo "<td><a href='formularioFacturaEditar.php?id=".$objetoaux->getIdFactura()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$objetoaux->getIdFactura()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
