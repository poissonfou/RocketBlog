<?php

$host = "localhost";
$dbname = "posts";
$user = "root";
$psw = "";

try{

    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $psw); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}

?>

