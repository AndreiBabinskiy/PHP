<html>
<head>
<title>Поиск клиента в базе</title>
</head>
<body>
<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    trim($_POST["searchterm"]) ;
    if (!$_POST["searchtype"] || !$_POST["searchterm"])
    {
        echo "Вы не ввели критерии поиска. Вернитесь назад и попробуйте еще раз";
        exit();
    }
    echo "<hl> Результаты поиска клиента </hl>";
    $searchtype = addslashes($_POST["searchtype"]);
    $searchterm = addslashes($_POST["searchterm"]);
    $query = "select * from customers where ".$searchtype." like '%".$searchterm."%'";
    $result = mysqli_query($link, $query); 
    $num_results = mysqli_num_rows ($result);
    echo "<p>Количество найденных клиентов: ".$num_results."</p>";
    $i=0; 
    while($customer = mysqli_fetch_array($result)) {
    echo "<p><strong>". (++$i) .". Название: ";
    echo htmlspecialchars(stripslashes ($customer['id_customer']));
    echo "</strong><br>name: " ;
    echo htmlspecialchars(stripslashes($customer['name']));
    echo "<br>adress: ";
    echo htmlspecialchars(stripslashes($customer['address']));
    echo "<br>city: ";
    echo htmlspecialchars(stripslashes($customer['city']));
    echo "</p>";
}
}

?>

<h1>Поиск клиента в базе</h1>
<form action="poiskcustomers.php" method="post">
Выберите параметр поиска:<br>
<select name="searchtype">
<option value="name">Имя
<option value="address">Адресс
<option value="city">Город
</select>
<br>
Введите параметры поиска:<br>
<input name="searchterm" type=text>
<br>
<input type=submit value="Поиск">
</form>
</body>
</html>