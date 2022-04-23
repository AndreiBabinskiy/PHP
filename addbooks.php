<HTML>
<HEAD>
<TITLE>  Добавление  новой  кники  </TITLE>
</HEAD>
<BODY>
<?
if  ($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
//Здесь будет обработка данных после нажатия кнопки Отправить
}
else  {
?>
<H1> Добавление новой книги </H1>
<FORM  METHOD=  "POST"  ACTION=  "addbooks.php"  >
<TABLE>
<TR  colspan=2><TD>Введите  информацию  о  книги</TD></TR>
<TR><TD>ISBN:</TD>
<TD><INPUT  NAME  ="id книга"  TYPE="TEXT"></TD></TR>
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
