<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $conn = new mysqli("localhost", "root", "", "people");

        $sql = "SELECT * FROM people";

        $result = $conn->query($sql);

        $json_array = array();

        while($rs = $result->fetch_assoc()){
            $json_array[] = $rs;
        }

        echo json_encode($json_array);

        /*echo('<pre>');
        print_r($json_array);
        echo('</pre>');*/

        $conn->close();

    ?>
    
</body>
</html>