<?php

/**
 * Date: 2018 October
 *
 * @author Jones Navela
 */

// get the q parameter from URL
$code = $_REQUEST["code"];
$name =  $_REQUEST["name"];
$count = $_REQUEST["count"];


if (!$code || !$count || !$name) {
    echo 'Please provide all parameters!';
    return;
}

$servername = "localhost";
$username = "root";
$dbname = "vla";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO provinces (name, code, car_registrations)
            VALUES ( '".$name."', '".$code."',".$count.") ON DUPLICATE KEY UPDATE car_registrations = ".$count.";";


    // use exec() because no results are returned
    $conn->exec($sql);

    echo "New record created successfully";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
