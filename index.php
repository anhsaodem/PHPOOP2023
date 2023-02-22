<?php
require "includes/person.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn OOP</title>
</head>

<body>
    <h1>Learn OOP PHP</h1>
    <?php
    // $person = new Person();
    $pet01 = new Pet();
    // echo $person->owner();
    echo "</br>";
    echo $pet01->owner();
    ?>
</body>

</html>