<?php // Регистрация
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="jquery-2.2.2.min.js"></script>
        <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, //Адрес подгружаемой страницы
                    type:     "POST", //Тип запроса
                    dataType: "html", //Тип данных
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
        
        <h1>Регистрация</h1>
        <div align = "center">
            <div class = "form" >
                <form action="" method="post" id="regForm">
				<center>
                    <input type="text" name="name" class="data" autofocus placeholder="Ваше имя" /><br><br>
                    <input type ="tel" name="email" class="data" placeholder="Введите email" /><br><br>
                    <input type ="text" name="login" class="data" autocomplete="off" placeholder="Придумайте логин"/><br><br>
                    <input type="password" name="password" class="data" placeholder="Придумайте пароль" /><br><br>
                    <input type="password" name="password2" class="data" placeholder="Подтвердите пароль" /><br><br>
                    <input type="button"  value="Сохранить" class = "btn3" onclick="AjaxFormRequest ('result','regForm','check2.php')"/>
					<div id="result"></div>
				</center>
                </form>
            </div>
        </div>
        <div align='center'><a href="index.php" ><h3>Если у вас есть аккаунт - Авторизуйтесь пожалуйста!</h3></a></div>
    </body>
</html>