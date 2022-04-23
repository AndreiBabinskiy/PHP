<HTML>
<HEAD>
<TITLE>  Добавление  новой  кники  </TITLE>
</HEAD>
<BODY>
<?php
if  ($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
echo  "<h1>Введенные  данные:</h1>";
echo  "<p>id_книга:<b>"  .  $_POST["id_book"]  .  "</b><br>"; echo  "Автор:<b>"  .  $_POST["author"]  .  "</b><br>"; echo  "Название:<b>"  .  $_POST["title"]  .  "</b><br>"; echo  "Цена:<b>"  .  $_POST["price"]  .  "</b></p>";
}
else 
?>
<H1> Добавление новой книги </H1>
<FORM  METHOD=  "POST"  ACTION=  "addbooks2.php"  >
<TABLE>
<TR  colspan=2><TD>Введите  информацию  о  книги</TD></TR>
<TR><TD>id_книга:</TD>
<TD><INPUT  NAME  ="id_book"  TYPE="TEXT"></TD></TR>
<TR><TD>Автор:</TD>
<TD><INPUT  NAME  ="author"  TYPE="TEXT"></TD></TR>
<TR><TD>Название:</TD>
<TD><INPUT  NAME  ="title"  TYPE="TEXT"></TD></TR>
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
