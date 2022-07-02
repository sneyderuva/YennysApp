<?php
include('functions.php');
//$tipo = $_GET['txtTi'];
$array = array();	
if($resultset=getSQLResultSet("SELECT * FROM productos")){
	
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		$e = array();
                $e['id'] = $row[0];
                $e['nombreproducto'] = $row[1];
                $e['descripcionproducto'] = $row[2];
                $e['fotoproducto'] = $row[3];
                $e['precioproducto'] = $row[4];
                array_push($array,$e);
	}
        echo json_encode($array);
}
?>
