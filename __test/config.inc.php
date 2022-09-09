<?php

$_FP = "http://www.domainedesfournelles.com/";

$rand = rand(0,9999999999999);

$lg = $_GET['lg'];

// ----
// ----- DB CONNECTION -----
// ----

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_dbnm = "leshortsnsdef";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_dbnm);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}