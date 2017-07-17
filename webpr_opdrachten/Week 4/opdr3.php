<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 opdracht 3</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TemplateOefeningen.css"/>
    <?php 
        $isAllSet = (isset($_POST['firstName']) &&
        isset($_POST['lastName']) &&
        isset($_POST['password']) &&
        isset($_POST['confirmPassword']) &&
        isset($_POST['email']));
        $invalidChars = str_split("!\"#$%&\'()*+,/0123456789:;<=>?@[\\}^_`{|}");
    ?>
</head>
<body>
<div id="container">
    <form id="form" method="post" action="opdr3.php">
        <p>
            Voornaam: <input id="firstName" type="text" name="firstName"/><br/>
            Achternaam: <input id="lastName" type="text" name="lastName"/><br />
            Wachtwoord: <input id="password" type="password" name="password"/><br />
            Bevestig wachtwoord: <input id="confirmPassword" type="password" name="confirmPassword"/><br />
            E-mailadres: <input id="email" type="text" placeholder="Vul een geldig e-mailadres in" name="email"/><br />
            <input id="submit" type="submit" value="Verstuur" /><br />
        </p>
        <p id="invalidInputMessage">
            <?php 
                if($isAllSet){
                    // initialise variables
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $password = $_POST['password'];
                    $confirmPassword = $_POST['confirmPassword'];
                    $email = $_POST['email'];

                    // Check first name
                    if(empty($firstName))
                        echo 'Vul een voornaam in</br>';
                    else {
                        foreach($invalidChars as $c) {
                            if(strpos($firstName, $c) !== false) {
                                echo 'Naam mag enkel letters en punten bevatten</br>';
                                break;
                            }
                        }
                    }

                    // Check last name
                    if(empty($lastName))
                        echo 'Vul een achternaam in</br>';
                    else {
                        foreach($invalidChars as $c) {
                            if(strpos($lastName, $c) !== false) {
                                echo 'Achternaam mag enkel letters en punten bevatten</br>';
                                break;
                            }
                        }
                    }

                    // Check password
                    if(strlen($password < 5))
                        echo "Wachtwoord moet minstens 5 karakters lang zijn</br>";
                    if($password != $confirmPassword)
                        echo "Wachtwoord en bevestiging komen niet met elkaar overeen</br>";

                    // Check email
                    if(empty($email))
                        echo "Vul een e-mailadres in</br>";
                    $pos = strpos($email, "@");
                    if($pos === false)
                        echo "Een e-mailadres moet \"@\" bevatten</br>";
                    elseif($pos == 0)
                        echo "Vul een naamgedeelte in voor de \"@\"</br>";
                    elseif($pos == strlen($email) - 1)
                        echo "Vul een adresgedeelte in na de \"@\"</br>";
                }
            ?>
        </p>
    </form>
</div>
<script type="text/javascript" src="opdr3.js"></script>
</body>
</html>
