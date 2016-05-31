<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<?php
   include 'autorize.php';
   $note = $_POST["notes"];
   $today = date("d.m.y");
   $count = count($person["notes"])-1;
   $newElem = array('$push' => array("notes" => array("id"=>++$count,"text"=>$note,"date"=>$today)));
   $list->update($filter,$newElem);
   ?>
<script>
    document.location = 'main.php';
</script>
  