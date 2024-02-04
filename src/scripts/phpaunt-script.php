<?php
require_once('requiredb.php');
session_start();

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];


$query = "SELECT * FROM userinfo WHERE useremail = '$userEmail' AND userpassword = '$userPassword'";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $userRole = $row['userrole'];
    $userName = $row['username'];
    
    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['userName'] = $userName;
    $_SESSION['userRole'] = $userRole;
    $_SESSION['LoginStatus'] = true;
    
    header("Location: ../index.php");
    exit();
} else {
    echo "Пользователь не найден!";
}

mysqli_close($mysqli);
?>