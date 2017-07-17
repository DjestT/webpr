<!DOCTYPE html>
<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $handle = fopen('users.txt', 'r');
        if ($handle) {
            // Each loop, read 2 lines
            while (($buffer = fgets($handle)) !== false) {
                // remove newline from end of string
                $buffer = trim($buffer);
                $bufferPassword = trim(fgets($handle));
                // if username and password matches
                if((strcmp($buffer, $username) == 0) && (strcmp($bufferPassword, $password) == 0)) {
                    fclose($handle);
                    header('Location: komBinnen.html');
                    exit();
                }
            }
            if (!feof($handle)) 
                echo 'Error: unexpected fgets() fail\n';

            fclose($handle);
            header('Location: blijfBuiten.html');
            exit();
        }
    }
?>

