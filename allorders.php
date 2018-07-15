<?php
   session_start();
   header('Content-Type: text/html; charset=utf-8');
   include("bd.php");
   
    $result_user = $mysqli->query("SELECT login FROM `users` WHERE id='1'");
    while (($moders = $result_user->fetch_assoc()) != FALSE) {   
    $admin = $moders['login'];
    }
    
    if ($_SESSION['login'] == $admin) {
   
  
    $result_set = $mysqli->query("SELECT * FROM `orders`");
    
    echo "Количество записей равно - ". $result_set->num_rows."<hr />";

    echo "<form action='editorders.php' method='POST'>";
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>Название товара</th>';
    echo '<th>Цена товара</th>';
    echo '<th>Логин</th>';
    echo '<th>Имя пользователя</th>';
    echo '<th>Комментарий пользователя</th>';
    echo '<th>Состояние заказа</th>';
    echo '<th>Редактирование</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    while (($row = $result_set->fetch_assoc()) != FALSE) {
        
    $id = $row['id'];
    $product_name = $row['product_name'];
    $product_price = $row['product_price'];
    $login = $row['login'];
    $name = $row['name'];
    $message = $row['message'];
    $state_order = $row['state_order'];
        
    echo '<tr>';
    echo '<td>';
    echo "<div>$id</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$product_name</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$product_price</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$login</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$name</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$message</div>";
    echo '</td>';
    echo '<td>';
    echo "<div>$state_order</div>";
    echo '</td>';
    echo '<td>';
    echo "<a href='edit.php?id=$id'>Редактировать</a>";
    echo '</td>';
    echo '<br />';
        }
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '<br />';
    echo "</form>";
    $mysqli->close(); }
    
 else {
     echo "Страница недоступна";
}
    echo "<br />";
    echo "<a href=index.php>Вернуться на главную</a>";
    
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость";
       }
    else { 
            echo "<br />Вы вошли на сайт как ". $_SESSION['login'];
     }
?>