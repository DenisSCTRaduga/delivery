<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
?>
<html>
    <head>
    <title>Главная страница</title>
    </head>
    <body>
    <div style="text-align: center">
    <br />    
    <h2>Введите данные</h2>
    <form action="testreg.php" method="post">

    <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
    
    <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>

    <p>
    <input type="submit" name="submit" value="Войти">
    <br />

    <a href="reg.php">Зарегистрироваться</a> 
    </p>
    
    <p><a href="index.php">Вернуться на главную</p>
    
    </form>
   
    <br>
    <?php

    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
        echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    ?>
    </div>
    </body>
    </html>