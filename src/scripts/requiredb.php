<?php
$mysqli = new mysqli("localhost", "root", "", "onlinestore");
if (!$mysqli){
    die("Connect error" . mysqli_connect_error());
}
?>
