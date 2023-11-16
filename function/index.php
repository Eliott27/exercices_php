<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = "emile";
        $name = ucfirst($name);
        echo $name;
?> <br><?php
        echo date("Y");
        ?> <br><?php
        echo date('l jS \of F Y h:i:s A');
        ?> <br><?php
        function sum($a, $b) {
            if (is_numeric($a) && is_numeric($b)) {
                return $a + $b;
        }
        else {
            echo "Error: argument is not a number.";
        }}

        echo sum(3, "s");
        ?> <br><?php
        function generateAcronym($inputString) {
            $words = explode(' ', $inputString);
            $acronym = '';
        
            foreach ($words as $word) {
                if (!empty($word)) {
                    $acronym .= strtoupper($word[0]);
                }
            }
        
            return $acronym;
        }
        
        $inputString = "In code we trust!";
        $acronym = generateAcronym($inputString);
        echo $acronym; 
        ?> <br><?php
        function replaceAEWithAE($inputString) {
            $result = str_replace(['ae'], 'æ', $inputString);
            return $result;
        }
        
        $inputStrings = ["caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca"];
        
        foreach ($inputStrings as $inputString) {
            $result = replaceAEWithAE($inputString);
            echo $result . PHP_EOL;
        }
        ?> <br><?php
        function replaceInvers($inputString2) {
            $result2 = str_replace(['æ'], 'ae', $inputString2);
            return $result2;
        }
        
        $inputStrings2 = ["cæcotrophie", "chænichthys", "microsphæra", "sphærotheca"];
        
        foreach ($inputStrings2 as $inputString2) {
            $result2 = replaceInvers($inputString2);
            echo $result2 . PHP_EOL;
        }
        ?>
</body>
</html>