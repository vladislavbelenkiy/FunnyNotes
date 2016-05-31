<?php header ("Content-Type: text/html; charset=utf-8")?> 
<?php // Выход из системы
     session_start();
     session_destroy();
     include 'autorize.php';

     
     
