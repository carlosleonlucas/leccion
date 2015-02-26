<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Usuario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("FacturaCollector.php");
include_once("Factura.php");
$FacturaCollectorObj = new FacturaCollector();
$ObjFactura = $FacturaCollectorObj->showFactura($id);
?>
<h2>Editar Objeto Factura</h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idfactura" value="<?php echo $ObjFactura->getIdFactura(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjFactura->getDescripcion(); ?>" autofocus required />
</p>
<p>
Total: <input type="text" name="total"  value="<?php echo $ObjFactura->getTotal(); ?>"  />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
