<?php
    require_once('requiredb.php');

    $userName = $_POST['username'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password']; 
    $verificationPassword = $_POST['verificationPassword'];

    $require = "INSERT INTO `userinfo` (username, useremail, userpassword) VALUES ('$userName', '$userEmail', '$userPassword')";
    $sql = "SELECT * FROM userinfo WHERE useremail = '$userEmail'";
    $result = mysqli_query($mysqli, $sql);
    if ($verificationPassword !== $userPassword){
        echo 'Вы ввели разные пароли повторите попытку позже'; 
    }else if(mysqli_num_rows($result) > 0){
        echo "Email найден в базе данных!";
    } else{
        $mysqli -> query($require);
    }
?>