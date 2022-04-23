<HTML>
<HEAD>
<TITLE>  Пример  HTML-формы  </TITLE>
</HEAD>
<BODY>
<?
if  ($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
echo  "<h1>Привет,  <b>"  .  $_POST["Name"]  .  "!</b></h1>";
}
else  {
?>
<H1>  Пример  HTML-формы  </H1>
<FORM  METHOD=  "POST"  ACTION=  "addbooks.php"  >
<TABLE>
<TR><TD>Введите  Ваше  имя:</TD>
<TD><INPUT  NAME  ="Name"  TYPE="TEXT"  >  </TD>
</TR>
<TR>
<TD COLSPAN=2 >
<INPUT  TYPE="SUBMIT"  VALUE="Отправить">
</TD>
</TR>
</TABLE>
</FORM>
<? }?>
</BODY>
</HTML>
