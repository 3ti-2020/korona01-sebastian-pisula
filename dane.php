<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dane.php</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pisula";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM pierwsza");
    $result1 = $conn->query("SELECT * FROM druga");

    echo("<table border='1'>");
    echo("<tr>
    <th>jeden</th>
    <th>dwa</th>
    <th>trzy</th>
    <th>cztery</th>
   </tr>");
    while($wiersz = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['jeden']."</td>"."<td>".$wiersz['dwa']."</td>"."<td>".$wiersz['trzy']."</td>"."<td>".$wiersz['cztery']."</td>");
        echo("</tr>");
    }
   

    echo("<table border='1'>");
    echo("<tr>
    <th>piec</th>
    <th>szesc</th>
    <th>siedem</th>
    <th>osiem</th>
    </tr>");
    while($wiersz1 = $result1->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz1['piec']."</td>"."<td>".$wiersz1['szesc']."</td>"."<td>".$wiersz1['siedem']."</td>"."<td>".$wiersz1['osiem']."</td>");
        echo("</tr>");
    }
    ?>
</body>
</html>

