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

        if($read){
            $message = "you have read $name";
        }else{
            $message = "you have not read $name";
        }

        ?>

        <h1>
            <?= "<h1> $message </h1>" ?>
        </h1>
</body>
</html>