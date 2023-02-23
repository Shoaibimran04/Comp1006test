<?php

    // Update the specified villain
    require_once("./connect.php");


    $sql = "UPDATE villains SET 
        title = :title,
        first_name = :first_name,
        last_name = :last_name,
        first_publication = :first_publication,
        powers = :powers 
        WHERE id = :id";

    $stmt = $conn->prepare($sql);


    $stmt->bindParam(":title", $_POST["title"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":first_name", $_POST["first_name"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $_POST["last_name"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":first_publication", $_POST["first_publication"], 
    PDO::PARAM_STR);
    $stmt->bindParam(":powers", $_POST["powers"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ./index.php");


?>
