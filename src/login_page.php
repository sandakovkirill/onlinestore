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
                    <form action="#" id="logForm" class="loginreg-form">
                    <div class="button-back">
                        <div class="button-back">
                            <a href="index.php">Назад</a>
                        </div>
                    </div>
                        <div class="title-form">
                            <h3>Авторизация</h3>
                        </div>
                        <input type="text" value="Почта">
                        <input type="text" value="Пароль">
                        <div class="form-autorisation__bottom">
                            <div class="login-button">
                                <button>Войти</button>
                            </div>
                            <div class="authLinks">
                                <button href="" class="changeButton" >Зарегистрироваться</button>
                            </div>
                        </div>
                    </form>
                    <form action="#" id="regForm" class="loginreg-form display-none">
                        <div class="button-back">
                            <a href="index.php">Назад</a>
                        </div>
                            <div class="title-form"><h3>Регистрация</h3>
                        </div>
                        <input type="text" value="Почта">
                        <input type="text" value="Имя">
                        <input type="text" value="Фамилия">
                        <input type="text" value="Пароль">
                        <input type="text" value="Подтверждения пароля">
                        <div class="form-registration__bottom">
                            <button>Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="scripts/user_authentication.Js"></script>
</html>