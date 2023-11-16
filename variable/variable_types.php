<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable_types</title>
</head>
<body>
    <?php   $name = "Eliott";
            $age = 25;
            $eyes = "blue";
            $eyes = "blue";
            $family = array(
                "Anouk",
                "Michel",
                "Dimitri",
                "Audric",);
    ?>
    <p> Hi! My name is <?php echo $name; ?> </p>
    <p> I am <?php echo $age; ?> years old </p>
    <p> My eyes are <?php echo $eyes; ?></p>
    <p> The first person in my family is <?php echo $family[0]; ?></p>
</body>
</html>
