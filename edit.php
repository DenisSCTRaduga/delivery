<?php
    include ("header.php"); 
    include ("bd.php");
    $id = $_GET['id'];
    
    $result_state = $mysqli->query("SELECT * FROM `orders` WHERE `id`=$id");
  
    while (($row = $result_state->fetch_assoc()) != FALSE) {
        
    $state_order_edit = $row['state_order'];
    
    echo '<form method="post" action="save.php">';
    echo "<textarea name='state_x'> $state_order_edit </textarea>";
    echo '<br /><br />';
    echo "<input type='hidden' name='id' value='$id'>";
    echo '<input type="submit" name="done" value="Сохранить">';
    echo '</form>';
    }
    echo '<br />';
    echo '<a href=index.php>Вернуться на главную</a>';
    $mysqli->close();

    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость";
       }
    else { 
            echo "<br />Вы вошли на сайт как ". $_SESSION['login'];
     }
?>