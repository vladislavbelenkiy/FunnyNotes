<?PHP  header("charset=utf-8");?>
<?php // Регистрация
              $login = $_POST['login'];
              $password1 = $_POST['password'];
              $password2 = $_POST['password2'];
              $name = $_POST['name'];
              $email = $_POST['email'];
              $today = date("d.m.y"); 
              include "ConnectionToDB.php";
              $filter = array("login"=>$login);
              $person = $list->findOne($filter);
             
              if (!preg_match('/^[a-zA-Z]{1,}$/',$name))
              {
                  echo "<span style='color:crimson;font-size:18px;'>Не введено имя.</span>";
                  return;
              }
              if(!filter_var($email, FILTER_VALIDATE_EMAIL))
              {
                  echo "<span style='color:crimson;font-size:18px;'>Не действующий адрес электронной почты.</span>";
                  return;
              }
              if (!preg_match('/^[a-zA-Z0-9]{3,12}$/',$login))
              {
                  echo "<span style='color:crimson;font-size:18px;'> Логин должен быть более чем 3 символов и меньше 12.</span>";
                  return;
              }
              if ($person != NULL)
              {
                  echo "<span style='color:crimson;font-size:18px;'> Логин не доступен.</span>";
                  return;
              }
             
              if (!preg_match('/.{6,12}/', $password1))
              {
                  echo "<span style='color:crimson;font-size:18px;'>Пароль должен быть больше чем 6 символов и менее 12.</span>";
                  return;
              }
              if ($password1 != $password2)
              {
                  echo "<span style='color:crimson;font-size:18px;'> Пароли не равны.</span>";
                  return;
              }
              else 
                  {
                      $user = array(
                      "login"=>$login,
                      "password"=>$password1,
                      "name"=>$name,
                      "email"=>$email,
                      "regdate"=>$today,
                      "notes"=> array(array(
                          "id"=>-1,
                          "text"=>"",
                          "date"=>$today
                      ))
                  );      
                   $list->insert($user);
                   echo "<a href='index.php' style='font-size:22px;'>Нажмите для реестрации</a>"; 
              }

              $connection->close();
     