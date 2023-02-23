<?php

    // Fetch villain with provided ID

    
    $sql = "SELECT  
        id, title, first_name, last_name, first_publication, powers 
    FROM 
        villains WHERE id=:id";

    require_once("./connect.php");

    $rows = [];
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(":id",$_GET["id"],PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Edit Villain</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Edit Villain Form</h1>

                <p>
                    <a href="./index.php">Back to Villains</a>
                </p>
            </header>

            <hr>

            <!-- Populate the values in the form with the retrieved villain -->
            <form class="mt-5" action="./update.php" method="post" novalidate>
                <input type="hidden" name="id" value="<?=$rows->id?>">

                <div class="form-group mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" required max="30" class="form-control" placeholder="Carnage"  value="<?=$rows->title?>">
                </div>

                <div class="form-group mb-3">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" required max="30" class="form-control" placeholder="Cletus" value=" <?=$rows->first_name?>">
                </div>

                <div class="form-group mb-3">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" required max="30" class="form-control" placeholder="Cassidy" value=" <?=$rows->last_name?>">
                </div>

                <div class="form-group mb-3">
                    <label for="first_publication">First Publication:</label>
                    <input type="datetime" name="first_publication" required max="30" class="form-control" value="<?=$rows->first_publication?>">
                </div>

                <div class="form-group mb-3">
                    <label for="powers">Powers:</label>
                    <input type="text" name="powers" required max="30" class="form-control" placeholder="can form weapons, organic webbing, can stick to walls" value="<?=$rows->powers?>">>
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </body>
</html>