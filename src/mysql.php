<?php

$database = "users";
$user = "root";
$password = "secret";
$host = "mysql";

$db = mysqli_connect("$host", "$user", "$password", "$database");

if (!$db) {
    echo "Cannot connect to the database server";
} elseif ($db && !(mysqli_select_db($SQL_DBASE, $db))) {
    echo "Sucessfully connected to the database server! Database Users selected!";
}
