<?php
    include("bd.php");
    include("header.php");  

    if (isset($_POST['done'])) {
        
        $state_x = strip_tags(trim($_POST['state_x']));
        $id_new = strip_tags(trim($_POST['id']));   

        echo "Статус изменен";
        $mysqli->query("UPDATE `orders` SET `state_order` = '$state_x' WHERE `orders`.`id` = '$id_new';");        
        echo '<a href=index.php>Вернуться на главную</a>';    
        }
    else {
    echo "Ошибка"; 
        }
        $mysqli->close();

    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость";
       }
    else { 
            echo "<br />Вы вошли на сайт как ". $_SESSION['login'];
     }
?>