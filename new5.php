<HTML>
<HEAD>
<TITLE> Добавление новоого клиента </TITLE>
</HEAD>
<BODY>
<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Введенные данные:</h1>";
    echo "<p>customerID:<b>" . $_POST["id_customer"] . "</b><br>";
    echo "Имя:<b>" . $_POST["name"] . "</b><br>";
    echo "Адресс:<b>" . $_POST["address"] . "</b><br>";
    echo "Город:<b>" . $_POST["city"] . "</b></p>";
    $query = "insert into customers values ('".$_POST["id_customer"]."','".$_POST["name"]."','".$_POST["address"]."','".$_POST["city"]."')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result) {
        echo "<h1>Клиент сохранен в базе данных</h1>";
    }
}
?>
<H1> Добавление нового клиента</H1>
<FORM METHOD="POST" ACTION= "new5.php" >
<TABLE>
<TR colspan=2><TD>Введите информацию о клиенте</TD></TR>
<TR><TD>customerID:</TD>
<TD><INPUT NAME ="id_customer" TYPE="TEXT"></TD></TR>
<TR><TD>Имя:</TD>
<TD><INPUT NAME ="name" TYPE="TEXT"></TD></TR>
<TR><TD>Адресс:</TD>
<TD><INPUT NAME ="address" TYPE="TEXT"></TD></TR>
<TR><TD>Город:</TD>
<TD><INPUT NAME ="city" TYPE="TEXT"></TD></TR><TR>
<TD COLSPAN=2 >
<INPUT TYPE="SUBMIT" VALUE="Отправить">
</TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>