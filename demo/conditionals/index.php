<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name ="kamal";
        $read = false;
        $number = 15;

        // 1 to 5 random numbers
        $random_num = rand(1,5);

        if($read){
            $message = "you have read $name";
        }else{
            $message = "you have not read $name";
        }

        switch($number){
            case 5:
                echo "Five";
                break;
            case 10:
                echo "Ten";
                break;
            default:
                echo "not"."<br>";
        }


        $num = 1;

        while($num <5){
            echo "Number is : "."$num"."<br>";
            $num++;
        }


        $array =include("foreach.php");

        echo "<h1>continue statement</h1>";
        include("continue.php");
        ?>

        <h1>
            <?= "<h1> $message </h1>" ?>
        </h1>

</body>
</html>