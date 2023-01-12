<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "tbl_pengunjung";
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysqli_connect("$host", "root", "", "$db_name") or die("cannot connect" . mysql_error());
// mysqli_select_db("$db_name") or die(mysql_error());
?>