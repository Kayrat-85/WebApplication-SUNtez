<!--Обработчик кнопки - ВОЙТИ-->

<?php
//устанавливаем cookie
//если куки уже есть, то мы минусуем время 
//иначе же, добавляем время
if($_COOKIE['user']== 'true'){
    setcookie('user', 'true', time() - 3600, '/');
}
else{ 
    setcookie('user', 'true', time() + 3600, '/');
}
//переадресация
header('Location: /');
?>
