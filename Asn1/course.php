<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
</head>
<body>
    <?php
        include 'dataRouting.php';
        $json=json_decode($info,true);

    ?>
    <div class="info-wrapper">
        <h1>Department of 
            <?php echo $json[$_GET["index"]]["name"]; ?>
        </h1>
        <span><?php echo $json[$_GET["index"]]["description"]; ?></span>
    </div>
    <h3>Our faculty</h3>
    <ul>
        <?php
            for($x=0;$x<3;$x++){
                echo "<li>".$json[$_GET["index"]]["teachers"][$x]."</li>";
            }
        ?>
    </ul>
</body>
</html>