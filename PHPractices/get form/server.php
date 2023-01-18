<?php

    $image_name = $_FILES["image"]["name"];
    $image = $_FILES["image"]["tmp_name"];
    $save_image = "images/$image_name";
    move_uploaded_file($image, $save_image);  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Imagen PHP</title>
</head>
<body>
        <div>

            <img src="<?= $save_image ?>" alt=" <?= $image_name ?>">
        
        </div>
</body>
</html>