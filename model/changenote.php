<?php
header ("Content-Type: text/html; charset=utf-8");?>
<?php
     include 'autorize.php';
     $note = $_POST["note"];
     $id = $_POST["id"];
     $notes = $person["notes"];
     

     for ($i = 1; $i < count($notes);$i++)
     {
        
         if ($i == $id)
         {
             $notes[$i]["text"] = $note;
         }
     }
    
     
 
   $option = array("upsert" => true);
   $newDoc = array('$set'=>array("notes"=>$notes));
   $list->update($person,$newDoc,$option);
   ?>
<script>
       document.location = 'main.php';
</script>