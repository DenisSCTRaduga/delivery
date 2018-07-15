<?php
     header('Content-Type: text/html; charset=utf-8');
?>

<html>
    <head>
    <title>Регистрация</title>
    </head>
    <body>
<div style="text-align: center">  
    <br />
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
</p>

<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
</p>

<p>
    <input type="submit" name="submit" value="Зарегистрироваться"> 
</p>
<br />
<a href="index.php">Вернуться на главную страницу</a>
    </form>
    </div>
    </body>
    </html>