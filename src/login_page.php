
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/css/normalize.css">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-user">
        <div class="container">
            <div class="login-user__inner">
                <div class="login-user__items">
                    <form action="scripts/phpaunt-script.php" id="logForm" class="loginreg-form" method="post">
                    <div class="button-back">
                        <div class="button-back">
                            <a href="index.php">Назад</a>
                        </div>
                    </div>
                        <div class="title-form">
                            <h3>Авторизация</h3>
                        </div>
                        <input type="text" placeholder="Введите ваш email" name="email" class="form-input">
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <input type="text" placeholder="Введите ваш пароль" name="password" class="form-input">
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <div class="form-autorisation__bottom">
                            <div class="login-button">
                                <button id="button-authorization" type="submit">Войти</button>
                            </div>
                            <div class="authLinks">
                                <button href="" class="changeButton">Зарегистрироваться</button>
                                <a href="">Забыли пароль?</a>
                            </div>
                        </div>
                    </form>
                    <form action="scripts/phpreg-script.php" id="regForm" class="loginreg-form display-none" method="post">
                        <div class="button-back">
                            <a href="index.php">Назад</a>
                        </div>
                            <div class="title-form"><h3>Регистрация</h3>
                        </div>
                        <input type="text" name="email" placeholder="Введите ваш email" class="form-input" > 
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <input type="text" name="username" placeholder="Введите ваш логин" class="form-input" >
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <input type="text" name="password" placeholder="Введите пароль" class="form-input">
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <input type="text" name="verificationPassword" placeholder="Подтвердите ваш пароль" class="form-input">
                        <div class="error-message display-none">
                            <p class="error-message-text">Error message</p>
                        </div>
                        <div class="form-registration__bottom">
                            <button type="submit" class="button-reg">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="scripts/user_authentication.Js"></script>
</html>