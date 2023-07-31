<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        if (isset($_GET["passwordLength"])) {
            $passwordLength = $_GET["passwordLength"];
        }

        $passwordItems = "a b c d e g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 1 2 3 4 5 6 7 8 9 0 [ ] { } @ # - _";

        $generatedPassword = "";


        include __DIR__ . "./functions.php";

    ?>

    <h1 class="text-center pt-5">Strong Password Generator</h1>
    <h2 class="text-center text-white pb-2">Genera una password sicura</h2>

    <div class="container">
        <form action="index.php" method="GET">
            <div class="datas pt-2 pb-3">
                <label for="passwordLength" class="pe-2">Lunghezza Password</label>
                <input type="text" id="passwordLength" name="passwordLength" autocomplete="off">
            </div>

            <div class="buttons pb-4">
                <button type="submit" class="btn btn-primary">Genera</button>
                <input class="btn btn-dark" type="reset" value="Reset">
            </div>
        </form>

        <h2> <?php if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] > 4 ) {
            echo generatePassword($passwordLength, $passwordItems, $generatedPassword);
        } else if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] <= 4) {
            echo "La password deve essere almeno di 5 caratteri";
        } ?> </h2>
    </div>
</body>
</html>