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
$book  =  mysqli_fetch_array($result);  
if($result)
{
echo  "<table  border=1>";
echo  "<tr><td>id</td><td>Авто</td><td>Название</td><td>Цена</td></tr>";
while($book  =  mysqli_fetch_array($result))
{
    echo "<tr><td>".$book['id_book']."</td>"; 
	echo "<td>".$book['author']."</td>";
	echo "<td>".$book['tittle']."</td>";
	echo "<td>".$book['price']."</td></tr>";
}
echo  "</table>";
}
else
{
echo  "<p><b>Ошибка:  ".mysqli_error()."</b></p>"; exit();
}
//Закрываем  подключение mysqli_close($link);
?>
</body>
</html>
