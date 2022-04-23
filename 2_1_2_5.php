<html>
<head>
    <title>2.1 - 2.5</title>
</head>
<body>
<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "employee";

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
    or die("Ошибка " . mysqli_error($link));
    if(!$link) 
    {
        echo "<P>В настоящий момент сервер базы данных не доступен.</P>";
        exit();
    }

    echo "<P>2.1</P>";
    $query = "SELECT name, employeeID from employee";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<table border=1>";
        echo "<tr><td>name</td><td>employeeID</td></tr>";
        while($request = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$request['name']."&nbsp;</td><td>".$request['employeeID']."&nbsp</td></tr>";
        }
        echo "</table>";
    }
    echo "<P>2.2</P>";
    $query = "SELECT employeeID, name from employee where job='Программист'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<table border=1>";
        echo "<tr><td>name</td><td>employeeID</td></tr>";
        while($request = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$request['name']."&nbsp;</td><td>".$request['employeeID']."&nbsp</td></tr>";
        }
        echo "</table>";
    }
    echo "<P>2.3</P>";
    $query = "SELECT * from assignment where employeeID=6651 and hours > 8";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<table border=1>";
        echo "<tr><td>clientID</td><td>employeeID</td><td>workdate</td><td>hours</td></tr>";
        while($request = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$request['clientID']."&nbsp;</td><td>".$request['employeeID']."&nbsp;</td><td>".$request['workdate']."&nbsp</td><td>".$request['hours']."&nbsp</td></tr>";
        }
        echo "</table>";
    }
    echo "<P>2.4</P>";
    $query = "SELECT count(distinct job) from employee";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<table border=1>";
        echo "<tr><td>counter</td></tr>";
        while($request = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$request['count(distinct job)']."&nbsp;</td></tr>";
        }
        echo "</table>";
    }
    echo "<P>2.5</P>";
    $query = "SELECT count(*), job from employee group by job";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<table border=1>";
        echo "<tr><td>сounter</td><td>job</td></tr>";
        while($request = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$request['count(*)']."&nbsp;</td><td>".$request['job']."&nbsp;</td></tr>";
        }
        echo "</table>";
    }
    
    else
    {
        echo "<p><b>Ошибка: ".mysqli_error()."</b></p>";
        exit();
    }
    ?>
    </body>
    </html>





    
