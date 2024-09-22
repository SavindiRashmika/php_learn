<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Kamal Perera";

        //lowerCase
        echo strtolower($name);

        echo "<br>";

        //upperCase
        echo strtoupper($name);

        echo "<br>";

        //word length
        echo strlen($name);

        echo "<br>";

        //string index
        echo $name[0];

        echo "<br>";

        //string index
        $name[2] = 2;
        echo $name;

        echo "<br>";

        //word replace
        echo str_replace("kamal", "Nimal", $name);
        
        echo "<br>";

        //word reverce
        echo strrev($name);
        
    ?>
</body>
</html>