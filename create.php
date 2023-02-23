<?php

    // Create a new villain in the database

    require_once("./connect.php");

    $sql = "INSERT INTO villains(
        title,
        first_name,
        last_name,
        first_publication,
        powers
    ) VALUES (
        :title,
        :first_name,
        :last_name,
        :first_publication,
        :powers
    )";   
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":title", $_POST["title"],
    PDO::PARAM_STR);
    $stmt->bindParam(":first_name", $_POST["first_name"],
    PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $_POST["last_name"],
    PDO::PARAM_STR);
    $stmt->bindParam(":first_publication", $_POST["first_publication"], PDO:: PARAM_STR);
    $stmt->bindParam(":powers", $_POST["powers"], PDO::PARAM_STR);
    $stmt->execute();
    header("Location: ./index.php");


?>