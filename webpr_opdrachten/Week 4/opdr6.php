<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 opdracht 6</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TemplateOefeningen.css"/>
</head>
<body>
<div id="container">
    <!-- <p id="inhoud"> -->
        <table>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
            </tr>
                <?php 
                require 'globals.php';
                try {
                    $db_conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
                } catch (PDOException $e) {
                    print "Error!: " . $e->getMessage() . "\n";
                    die();
                }

                $query = $db_conn->prepare("SELECT * FROM gebruikers");
                if($query->execute()) {
                    while ($row = $query->fetch(PDO::FETCH_BOTH)) {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<\tr>";
                    }
                }
                else
                    die("Execute query error, because: " . $db_conn->errorInfo());

                $db_conn = null;
                ?>
        </table>
    <!-- </p> -->
</div>
</body>
</html>
