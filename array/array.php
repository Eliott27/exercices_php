<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $family = array("Michel", "Anouk", "Dimitri", "Audric", "Eliott");
    print_r($family);

    $recette = array("poulet", "frite", "compote");
    print_r($recette);

    $film = array("Spiderman", "Inception", "Interstellar");
    echo $film[2];

    $me = array(
        "age" => "25",
        "firstname" => "Eliott",
        "lastname" => "De Trez",
        "hobbies" => array("Hockey", "Crossfit", "Fete"));

        echo '<pre>';
        print_r($me);
        echo '</pre>';
    ?>
</body>
</html>