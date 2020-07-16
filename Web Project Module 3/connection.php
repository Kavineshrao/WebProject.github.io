<?php

$conn  = mysqli_connect("127.0.0.1", "root", "");
$conn2 = mysqli_connect("127.0.0.1", "root", "");
$conn3 = mysqli_connect("127.0.0.1", "root", "");

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$selected = mysqli_select_db($conn, "user_login_database") or die(mysql_error());


$attendance = mysqli_select_db($conn2, "attendance") or die(mysql_error());
//mysqli_query($conn2, "INSERT INTO user_attendance (username, password) VALUES ('Success', 'abcd')");

$event = mysqli_select_db($conn3, "description") or die(mysql_error());


?>
