<HTML>
<HEAD>
<TITLE>  Добавление  новой  кники  </TITLE>
</HEAD>
<BODY>
<?php
include  "config.php";
if  ($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
echo  "<h1>Введенные  данные:</h1>";
echo  "<p>id книга:<b>"  .  $_POST["id_book"]  .  "</b><br>"; echo  "Автор:<b>"  .  $_POST["author"]  .  "</b><br>"; echo  "Название:<b>"  .  $_POST["tittle"]  .  "</b><br>"; echo  "Цена:<b>"  .  $_POST["price"]  .  "</b></p>";

$query  =  "insert  into  books  values  ('".$_POST["id_book"]."','".$_POST["author"]."','".$_POST["tittle"]."',".$_POST["price"].")";
$result  =  mysqli_query($link,  $query)  or  die("Ошибка  "  .  mysqli_error($link)); if($result)
{
echo  "<h1>Книга  сохранена  в  базе  данных</h1>";
}
}
else  
?>
<H1> Добавление новой книги </H1>
<FORM  METHOD=  "POST"  ACTION=  "addbooks3.php"  >
<TABLE>
<TR  colspan=2><TD>Введите  информацию  о  книги</TD></TR>
<TR><TD>id книга:</TD>
<TD><INPUT  NAME  ="id_book"  TYPE="TEXT"></TD></TR>
<TR><TD>Автор:</TD>
<TD><INPUT  NAME  ="author"  TYPE="TEXT"></TD></TR>
<TR><TD>Название:</TD>
<TD><INPUT  NAME  ="tittle"  TYPE="TEXT"></TD></TR>
<TR><TD>Цена:</TD>
<TD><INPUT  NAME  ="price"  TYPE="TEXT"></TD></TR><TR>
<TD COLSPAN=2 >
<INPUT  TYPE="SUBMIT"  VALUE="Отправить">
</TD>
</TR>
</TABLE>
</FORM>
<? }?>
</BODY>
</HTML>
