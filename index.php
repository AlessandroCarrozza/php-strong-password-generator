<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php
        $passwordLength = $_GET["passwordLength"];
    ?>


    <div class="container">
        <form action="index.php" method="GET" class="mt-5">
            <label for="passwordLength">Lunghezza Password</label>
            <input type="text" id="passwordLength" name="passwordLength">

            <button type="submit" class="btn btn-primary">Invia</button>
            <input class="btn btn-dark" type="reset" value="Reset">
        </form>
    </div>
</body>
</html>