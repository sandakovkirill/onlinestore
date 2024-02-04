<?php
session_start();
$userEmail = $_SESSION['userEmail'];
$userName = $_SESSION['userName'];


if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/css/normalize.css">
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body>
    <div class="user-info">
        <div class="container">
            <div class="user-info__inner">
                <div class="user_info__wrapper">
                    <form method="post">
                    <h4>Информация о Пользователи</h4>
                    <div class="user-name"> <p>Адрес почты: <?php echo $userEmail;?></p></div>
                    <div class="user-email"> <p>Имя пользователя: <?php echo $userName;?></p></div>
                    <button type="submit" name="logout">Выйти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>