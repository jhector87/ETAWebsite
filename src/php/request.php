<html>
    <title>Inserting into mySQL-DATABASE</title>
    <body>

<?php
required "configs.php";
getConfigs();

        // if there is POST data, insert into the database
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $language = $_POST['language'];
            $sql="INSERT INTO language(name) VALUES ('$language')";

            //make sure the query is valid or log the error
            if ($conn->query($sql) != TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
         }

        //always present the table
        $sql="SELECT name FROM language"; // name, language => variables from the database column
        $result = $conn->query($sql);
        echo "<table border>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td></tr>";
        }
        echo "</table>";
?>
    </body>
</html>
