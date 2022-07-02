<?php

define('DB_HOST', 'sql10.freesqldatabase.com');
define('DB_USER', 'sql10503616');
define('DB_PASS', '3144722469Ss');
define('DB_NAME','sql10503616');

header('Content-Type: text/html;charset=utf-8');


function ejecutarSQLCommand($commando) {
    //$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('unable to connect to db');
    mysqli_set_charset($mysqli, 'utf8');

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    if ($mysqli->multi_query($commando)) {
        if ($resultset = $mysqli->store_result()) {
            while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
                
            }
            $resultset->free();
        }
    }
    $mysqli->close();
}

function getSQLResultSet($commando) {
   // $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
     $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('unable to connect to db');
    mysqli_set_charset($mysqli, 'utf8');
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    if ($mysqli->multi_query($commando)) {
        return $mysqli->store_result();
    }
    $mysqli->close();
}

?>
