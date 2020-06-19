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