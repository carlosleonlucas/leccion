<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM factura where idfactura= ? ", array("{$id}")); 
    $ObjFactura = new Factura($row[0]{'idfactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $ObjFactura;
  }

  function createFactura($descripcion, $total) {    
    $insertrow = self::$db->insertRow("INSERT INTO leccion.factura (idfactura, descripcion, total) VALUES (?, ?, ?)", array(null, "{$descripcion}, {$total}"));
  }  

  function readFactura() {
   
    $rows = self::$db->getRows("SELECT * FROM factura ");        
    $arrayFactura= array();        
   
    foreach ($rows as $c){
      $aux = new Factura($c{'idfactura'},$c{'descripcion'},$c{'total'});
      array_push($arrayFactura, $aux);
    }
    return $arrayFactura;        
  }
  
  function updateFactura($id,$descripcion,$total) {    
    $insertrow = self::$db->updateRow("UPDATE leccion.factura SET factura.descripcion, factura.total = ?,?  WHERE factura.idfactura = ? ", array( "{$descripcion},{$total}",$id));
  }  

  function deleteFactura($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM leccion.factura WHERE idfactura= ?", array("{$id}"));
  }  
}
?>

