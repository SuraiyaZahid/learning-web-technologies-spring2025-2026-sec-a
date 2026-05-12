<?php

    $host ="127.0.0.1";
    $dbname = "webtech";
    $dbuser = "root";
    $dbpass = "Megadeth69@.";


    function getConnection() {
        global $host;
        global $dbname;
        $con = mysqli_connect($host, $GLOBALS['dbuser'], $GLOBALS['dbpass'], $dbname);
        return $con;
    }


?>