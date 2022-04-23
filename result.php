<html>
<head>
<title>Результаты  поиска  книги</title>
</head>
<body>
<?
include  "menu.php"; include  "config.php";
?>
<hl>  Результаты  поиска  книги  </hl>
<?
trim($_POST["searchterm"])  ;  //убираем  лишни  пробелы  по  краям  слова if  (!$_POST["searchtype"]  ||  !$_POST["searchterm"])
{
 
echo  "Вы  не  ввели  критерии  поиска.  Вернитесь  назад  и  попробуйте  еще  раз"; exit();
}
//добавляет  символы  косой  черты,  перед  символами,  которые  могут  быть  интерпретированы  к ак управляющие
$searchtype  =  addslashes($_POST["searchtype"]);
$searchterm  =  addslashes($_POST["searchterm"]);
$query  =  "select  *  from  books  where  ".$searchtype."  like  '%".$searchterm."%'";  //  соста вляем запрос
$result  =  mysqli_query($link,  $query);  //  выполняем  запрос
$num_results  =  mysqli_num_rows  ($result);  //  опредляем  количество  строк  в  запросе echo  "<p>Количество  найденных  книг:  ".$num_results."</p>";
$i=0;  //счетчик  книг
while($book  =  mysqli_fetch_array($result))  { echo  "<p><strong>".  (++$i)  .".  Название:  ";
echo  htmlspecialchars(stripslashes  ($book['tittle'])); echo  "</strong><br>Автор:  "  ;
echo  htmlspecialchars(stripslashes($book['author'])); echo  "<br>ISBN:  ";
echo  htmlspecialchars(stripslashes($book['id_book'])); echo  "<br>Цена:  ";
echo  htmlspecialchars(stripslashes($book['price'])); echo "</p>";
}
?>
</body>
</html>
