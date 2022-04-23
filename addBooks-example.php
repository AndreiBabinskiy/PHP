<html>
<head>
    <title>Добавление кнги</title>
</head>
<body>
<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{ //Здесь будет обработка данных после нажатия кнопки Отправить
   echo "<h1>Введенные данные:</h1>";
   echo "<b>id кнги:</b>".$_POST["id_book"]."<br>";
   echo "<b>Автор:</b>".$_POST["author"]."<br>";
   echo "<b>Название:</b>".$_POST["tittle"]."<br>";
   echo "<b>Цена:</b>".$_POST["price"]."<br>";
   $query="insert into books values (NULL,'".$_POST["id_book"]."', '".$_POST["author"]."', '".$_POST["tittle"]."', '".$_POST["price"]."')";
   $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
   if ($result)
      echo "<br>Данные клиента успешно добавлены в базу данных";
}
else {
?>
<form action="addclients.php" method="POST">
<b>id книги:</b><br>
<input type="text" name="id_book" size="15" maxlength="45" value=""><br>

<b>Автор:</b><br>
<input type="text" name="author" size="15" maxlength="45" value=""><br>

<b>Название:</b><br>
<input type="text" name="tittle" size="15" maxlength="45" value=""><br>

<b>Цена:</b><br>
<input type="text" name="price" size="15" maxlength="45" value=""><br>

<input type="submit" value="Сохранить">
</form>
<? } ?>
</body>
</html>