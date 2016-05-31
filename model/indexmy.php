<?php
$mongo = new MongoClient();
$maindb = $mongo->test;
$usercollection=$maindb->memories;
$arr=$usercollection->find();
foreach ($arr as $x){
    
    $notes_1=$x['notes'];
    if (empty($notes_1)) continue;
    foreach($notes_1 as $name=>$z){
        
       echo "Name: ".$x['name']." Surname:".$x['surname']. "->Notes of the user:  " .$name.": ". $z['text'].'<br/>'; 
    }
    
}    
exit();
?>