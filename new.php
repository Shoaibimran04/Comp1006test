<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Villain Registration</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Villain Registration Form</h1>

                <p>
                    <a href="./index.php">Back to Villains</a>
                </p>
            </header>

            <hr>

            <form class="mt-5" action="./create.php" method="post" novalidate>
                <div class="form-group mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" required max="30" class="form-control" placeholder="Carnage">
                </div>

                <div class="form-group mb-3">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" required max="30" class="form-control" placeholder="Cletus">
                </div>

                <div class="form-group mb-3">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" required max="30" class="form-control" placeholder="Cassidy">
                </div>

                <div class="form-group mb-3">
                    <label for="first_publication">First Publication:</label>
                    <input type="date" name="first_publication" required max="30" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="powers">Powers:</label>
                    <input type="text" name="powers" required max="30" class="form-control" placeholder="can form weapons, organic webbing, can stick to walls">
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </body>
</html>