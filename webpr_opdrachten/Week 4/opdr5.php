<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 opdracht 5</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TemplateOefeningen.css"/>
</head>
<body>
<div id="container">
    <p id="inhoud">
        <?php 
            require 'globals.php';
            try {
                print DB_HOST . " " . DB_NAME . " " . DB_USER . " " . DB_PASSWORD . "<br/>";
                $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
                print "SUCCESS!\n";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "\n";
                die();
            }
        ?>
    </p>
</div>
</body>
</html>
