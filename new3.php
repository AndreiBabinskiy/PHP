<html>
<head>
<title>Список  покупателей</title>
</head>
<body>
<hr>
<?php
include  "config.php";
$query  =  "SELECT  *  FROM  customers";
$result  =  mysqli_query($link,  $query)  or  die("Ошибка  "  .  mysqli_error($link)); 
$customer  =  mysqli_fetch_array($result);  
if($result)
{
echo  "<table  border=1>";
echo  "<tr><td>id</td><td>Имя</td><td>Адресс</td><td>Город</td></tr>";
//  Так  как  запрос  возвращает  несколько  строк,  применяем  цикл while($book  =  mysqli_fetch_array($result))
while($customer=mysqli_fetch_array($result))
{
echo  "<tr><td>".$customer['id_customer']."&nbsp;</td><td>".$customer['name']."&nbsp  </td><td>".$customer['address']."&nbsp;</td><td>".$customer['city']."&nbsp;</td></tr>";
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
