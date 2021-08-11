<?php
  //переменные принимают значение из формы
  $email = $_POST['email'];
  $message = $_POST['message'];
  //переменная для определения ошибки
  $error = "";
  //проверка переменных, есть ли значение
  if(trim($email)=='')
      $error = 'Введите ваш почтовый адрес';
      elseif (trim($message)=='')
          $error = 'Введите текст сообщения!';
      elseif (strlen($message)<10)
          $error = 'Сообщение должно быть более 10 символов';
  //если переменная не пустая, вывод типа ошибки. После завершение кода
  if($error != ''){
      echo $error;
      exit;
  }
  //отправка сообщений на почту. $subject - тема письма, $message - текст письма
  //$headers - заголовки
  $subject = "=?utf-8?B?".base64_encode("Тема письма")."?=";
  $headers = "From: $email\r\nReaply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
  //функция для отправки сообщений
  mail('elektrik002@mail.ru', $subject, $message, $headers);
  
  //переадресация пользователя, после отправки сообщения.
  header('Location: /contacts.php');
?>

