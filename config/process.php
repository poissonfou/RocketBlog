<?php
    include_once("server.php");
    include_once("connection.php");

    $posts = [];

      $query = "SELECT * FROM post";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $posts = $stmt->fetchAll();

    $dates = [];
?>