<?php

require_once 'pdoconnect.php';

if (isset($_POST['submit'])){

    $name = $_POST["name"];
    $country = $_POST["country"];
    $age = $_POST["age"];

    $sql1 = ('INSERT INTO pdotable (Name, Age, Country) values (?, ?, ?)');
    $pdo->prepare($sql1)->execute([$name, $age, $country]);


    $sql2 = $pdo->query('SELECT Name FROM pdotable');
    foreach ($sql2 as $row)
    {
            echo $row['Name'] . "\n";
    }

}