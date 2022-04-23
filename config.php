<?php
$db_host  =  "localhost";//сервер
$db_user  =  "root";//имя  пользователя
$db_pass  =  "";//пароль
$db_name  =  "bookby";//название  базы  данных

//подключаемся  к  серверу
$link  =  mysqli_connect($db_host,  $db_user,  $db_pass,  $db_name) or  die("Ошибка  "  .  mysqli_error($link));
//выполняем  операции  с  базой  данных

if(!$link)  //  Если  дескриптор  равен  0  соединение  не  установлено
{
echo  "<P>В  настоящий  момент  сервер  базы  данных  не  доступен.</P>"; exit();
}
?>
