<?php

    // Fetch all villains from the database

    $sql = "SELECT  
        id, title, first_name, last_name, first_publication, powers 
    FROM 
        villains";

    require_once("./connect.php");

    $rows = [];

    if ($conn){
        $rows = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);

    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Villains</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Villains</h1>
                <p>
                    <a href="./new.php">New Villain</a>
                </p>
            </header>

            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>First Appearance</th>
                        <th>Powers</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Iterate over the villains and display them in the rows -->
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?= $row->title ?></td>
                            <td><?= $row->first_name ?></td>
                            <td><?= $row->last_name ?></td>
                            <td><?= $row->first_publication ?></td>
                            <td><?= $row->powers ?></td>
                            <td>
                            <a href="./edit_villains.php?id=<?= $row->id ?>">edit</a>
                            <a href="./delete_villains.php?id=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete this from the table')">delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>