<?php
include('functions.php');
//$tipo = $_GET['txtTi'];
$array = array();	
if($resultset=getSQLResultSet("SELECT * FROM productos")){
	
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		$e = array();
                $e['Id'] = $row[0];
                $e['Nombre'] = $row[1];
                $e['Foto'] = $row[2];
                $e['Precio'] = $row[3];
                
                array_push($array,$e);
	}
        echo json_encode($array);
}
?>
