<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Авторизация</title>
        <link rel="stylesheet" href="style.css"/>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
    <script src="jquery-2.2.2.min.js">
    </script>
        
         <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, 
                    type:     "POST", 
                    dataType: "html", 
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                            document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) { //Если ошибка
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
        
         </script>
    </head>
    <body>
        
        <h1>Вход в систему</h1>
        <div align = "center">
            <div class = "form">
                <form  action="" method="post" id = "myform">
				<center>
                    <input type="text" name = "login" class="data" autofocus  placeholder="Логин" autocomplete="off"/><br><br>
                    <input type = "password" name = "password" class="data" placeholder="Пароль" /><br><br>
                    <input type = "button" class="btn3" value="Войти" onclick="AjaxFormRequest('mistake','myform','check.php')"/>
                    <div id="mistake" ></div>
				</center>
                </form>
            </div>
        </div>
        <div align='center'><a href="registration.php" ><h3>Если у вас нет аккаунта - Зарегистрируйтесь пожалуйста!</h3></a></div>
    </body>
</html>
