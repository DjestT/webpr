<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 opdracht 2</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TemplateOefeningen.css"/>
</head>
<body>
<div id="container">
    <form id="sumform" action="opdr2.php" method="get">
        <p>
            <input type="text" name="n1"/><br/>
            <input type="text" name="n2"/><br/>
            <p id="sum">
                <?php 
                    if(isset($_REQUEST['n1']) && isset($_REQUEST['n2']))
                    {
                        $n1 = $_REQUEST['n1'];
                        $n2 = $_REQUEST['n2'];
                        if(is_numeric($n1) && is_numeric($n2))
                        {
                            $sum = $n1 + $n2;
                            echo 'The sum is ' . $sum;
                        }
                        else
                            echo '<script type="text/javascript">alert("Please use numbers");</script>';
                    }
                ?>
            </p>
            <input type="submit" value="Sum"/>
        </p>
    </form>
</div>
</body>
</html>
