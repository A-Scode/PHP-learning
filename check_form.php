<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check form</title>
</head>
<body>
    <?php
    echo "<p>\$_SERVER['REQUEST_METHOD'] : " . $_SERVER['REQUEST_METHOD'] . "</p>";
    echo "<p>\$_POST : " . json_encode($_POST) ."</p>";
    echo "<p>\$_FILES : " . json_encode ($_FILES) . "</p>";
    echo "<p>filesize : " . filesize($_FILES['photo']['tmp_name']) . "</p>";
    //this will move the uploaded file to desired place
    move_uploaded_file($_FILES['photo']['tmp_name'] , 'uploads/'.$_FILES['photo']['name']);
    ?>
</body>
</html>