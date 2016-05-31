<?php header ("Content-Type: text/html; charset=utf-8")?>
  <?php
$connection = new MongoClient();
$list = $connection->test->memories;
