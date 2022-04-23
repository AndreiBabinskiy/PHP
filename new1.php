<html>
<head>
<title>Список  книг</title>
</head>
<body>
<hr>
<?php
include  "config.php";
$query  =  "SELECT  *  FROM  books";
$result  =  mysqli_query($link,  $query)  or  die("Ошибка  "  .  mysqli_error($link)); 
if($result)
{
echo  "Выполнение  запроса  прошло  успешно";
$book  =  mysqli_fetch_array($result);  
echo  "<br>id_book =  ".$book['id_book']."<br>"; 
echo  "Автор  =  ".$book['author']."<br>"; 
echo  "Название  =  ".$book['tittle']."<br>"; 
echo  "url  =  ".$book['price']."<br>";
}
else
{
echo  "<p><b>Ошибка:  ".mysqli_error()."</b></p>"; exit();
}
//Закрываем  подключение mysqli_close($link);
?>
</body>
</html>
