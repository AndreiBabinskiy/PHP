<html>
<head>
    <title>Результаты  поиска  книги</title>
</head>
<body>
<?php
include  "menu.php"; include  "config.php";
?>
<h1>Поиск книги в справочнике</h1>
<form action="poisk.php" method="POST">
Выберите параметры для поиска:<br>
<select name="type">
   <option value="id_book">id_book</option> 
   <option value="author">Автор</option> 
   <option value="tittle">Заголовок</option>
   <option value="price">Цена</option>
</select><br>
Введите параметры поиска:<br>
<input name="term" type="text"><br>
<input type="submit" value="Поиск">
</form>

<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	echo "Выполняется поиск по столбцу ".$_POST["type"]." ищем влючение значения ".$_POST["term"]."<br>";
	$query="select * from books where ".$_POST["type"]." like '%".$_POST["term"]."%'";
	echo $query;
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if ($result)
    {
	 echo "<table border=1>";
	 echo "<tr>
		  <td>id_book</td>
		  <td>Автор</td>
		  <td>Заголовок</td>
		  <td>Цена</td>
		  </tr>";
	 while($book=mysqli_fetch_array($result))
     {		
	    echo "<tr><td>".$client['id_book']."</td>"; 
	    echo "<td>".$client['author']."</td>";
	    echo "<td>".$client['tittle']."</td>";
	    echo "<td>".$client['price']."</td></tr>";
	 }
	 echo "</table>";
  }
  else
  {
	echo "<p>Ошибка выполнения запроса.</p>"; 
	exit();
  }

}
?>

</body>
</html>