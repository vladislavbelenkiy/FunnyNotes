<?php header ("Content-Type: text/html; charset=utf-8")?>
<?php
     include 'autorize.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Заметки</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>

        <script type="text/javascript">
            
$(function() {
	
	$('.form2').draggable({
        containment: "window"
    });
});
    </script>
    </head>
    <body>
        <div align="right"><a style='color:#FF0000;font-size:20px' href="logout.php">Выход из системы</a></div>
        <h1>Здравствуйте,<?php  echo $person["name"];?></h1>
        <h2>Создайте свою заметки!</h2>
        <div align="center">
        <div class="form">
            <form method="post" action="sendNote.php">
                <textarea class="note" name="notes" cols="48" rows="7" wrap="hard" required placeholder="Заметка..."></textarea>
                <center>
				<input type="submit" value="Добавить" class="btn3"/>
				</center>
                <span id="result"></span>
            </form>
        </div>  
        </div>
        
        <hr width="60%">
        <h2 style="text-align:center">Ваши заметки</h2>
		
		<?php
    $notes = $person["notes"];
    if (count($notes)== 1)
    {
        echo "<div align='center'><div class='form' style='text-align:center;'><span style='color:crimson;font-size:24px;font-family:cursive;'>У вас нет заметки, создайте её сейчас!</span></div></div>";
    }
    for ($i = count($notes)-1;$i > 0;$i--)
    {
        ?>
        <div  align="center" >
            <div class ="form2 ui-widget ui-corner-all ui-state-error">
            <center><h5 style='width:20%'></h5></center>
            
            <form method="post" action="changenote.php">
                <textarea class="id" name="id"><?php echo $notes[$i]["id"]?></textarea>
                <textarea class="note2" name="note" cols="48" rows="7" wrap="hard" onkeypress="if(event.keyCode==10||(event.ctrlKey && event.keyCode==13))koment.click();"><?php echo $notes[$i]["text"];?>
                </textarea>	
                <center><input type="submit" value="Сохранить изменение" class="btn" id="koment"/></center>
            </form>
            <form method="post" action="deleteNote.php" id="delete">
               <center><input type="submit" value="Удалить" class="btn1"/></center>
                <textarea class="id" name="id" ><?php echo $notes[$i]["id"]?></textarea>         
            </form>
			</div>
        </div><?php
    }?>
        
    </body>
</html>