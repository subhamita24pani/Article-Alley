<?php
$HOST = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME = "project";
$conn = new mysqli($HOST,$USERNAME, $PASSWORD, $DB_NAME);
if($conn->connect_error){
    die($conn->connect_error);
}
?>