<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_mahasiswa";

$db = mysqli_connect($server, $user, $password, $database);

if( !$db){
    die("gagalterhubung dengan database: " .
    mysqli_connect_error());
}

?>