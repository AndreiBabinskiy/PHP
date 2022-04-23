<HTML>
<HEAD>
<TITLE>  Добавление  нового  клента  </TITLE>
</HEAD>
<BODY>
<?php
include  "config.php";
if  ($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
echo  "<h1>Введенные  данные:</h1>";
echo  "<p>id клиент:<b>"  .  $_POST["id_customer"]  .  "</b><br>"; echo  "Name:<b>"  .  $_POST["name"]  .  "</b><br>"; echo  "Address:<b>"  .  $_POST["address"]  .  "</b><br>"; echo  "City:<b>"  .  $_POST["city"]  .  "</b></p>";

$query  =  "insert  into  customers  values  ('".$_POST["id_customer"]."','".$_POST["name"]."','".$_POST["address"]."',".$_POST["city"].")";
$result  =  mysqli_query($link,  $query)  or  die("Ошибка  "  .  mysqli_error($link)); 
if($result)
{
echo  "<h1>Клиент  сохранен  в  базе  данных</h1>";
}
}
else  
?>
<H1> Добавление нового клиента </H1>
<FORM  METHOD=  "POST"  ACTION=  "addcustomer.php"  >
<TABLE>
<TR  colspan=2><TD>Введите  информацию  о  клиенте</TD></TR>
<TR><TD>id клиент:</TD>
<TD><INPUT  NAME  ="id_customer"  TYPE="TEXT"></TD></TR>
<TR><TD>Name:</TD>
<TD><INPUT  NAME  ="name"  TYPE="TEXT"></TD></TR>
<TR><TD>Address:</TD>
<TD><INPUT  NAME  ="address"  TYPE="TEXT"></TD></TR>
<TR><TD>City:</TD>
<TD><INPUT  NAME  ="city"  TYPE="TEXT"></TD></TR><TR>
<TD COLSPAN=2 >
<INPUT  TYPE="SUBMIT"  VALUE="Отправить">
</TD>
</TR>
</TABLE>
</FORM>
<? }?>
</BODY>
</HTML>
