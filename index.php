<?php
   session_start();
   header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Форма заказа</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <br />
    <div style="text-align: center"><h3><a href="input.php">Войдите</a> или <a href="reg.php">зарегистрируйтесь</a><h3></div><br />
    
    <div style="text-align: center">     
                <form name="select_products" action="#.php" method="post">
                    
                    <select>
                        <option></option>
                    </select>
                    
                    <input type="submit" name="done" value="Сделать заказ">
                </form> 
            <br />    
        <a href="allorders.php">Заказы в базе</a>
        <br />
        <a href="neworder.php">Редактирование списка товаров</a>
    </div>
                
<?php

    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость";
       }
    else { 
            echo "<br />Вы вошли на сайт как ". $_SESSION['login'];
     }
?>               
                
</body>
</html>