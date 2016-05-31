<?php header ("Content-Type: text/html; charset=utf-8")?>
<?php
session_start();
    $login = $_SESSION["login"];
    $password = $_SESSION["password"];
    $filter = array(
        "login"=>$login,
        "password"=>$password
    );
    include 'ConnectionToDB.php';
    $person = $list->findOne($filter);
    if ($person == null)
    {
       ?> <script>document.location = 'index.php';</script><?php
    }