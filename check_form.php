<?php
session_start();
?>

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
    echo " time : " . time();
    echo "<p>\$_SERVER['REQUEST_METHOD'] : " . $_SERVER['REQUEST_METHOD'] . "</p>";
    echo "<p>\$_POST : " . json_encode($_POST) ."</p>";
    echo "<p>\$_FILES : " . json_encode ($_FILES) . "</p>";
    echo "<p>filesize : " . filesize($_FILES['photo']['tmp_name']) . "</p>";
    //this will move the uploaded file to desired place
    move_uploaded_file($_FILES['photo']['tmp_name'] , 'uploads/'.$_FILES['photo']['name']);

    //set cookie
    setcookie("password" , "293487hdkf8kKSHFKjfhndkfneuy*(Y#$" , time()+(86400*365) );

    print_r($_COOKIE);

    $_SESSION['Name'] = "Jhon";
    $_SESSION['LastName'] = "Smith";

    echo "<br>";
    print_r($_SESSION);
    session_unset();
    echo "<br>";
    print_r($_SESSION);

    //array_map
    function get_len($str){
        return strlen($str);
    }

    $arr = ["hello" , "hii" , "how"  , "much" , "is" , "this"];
    $new_arr = array_map("get_len" , $arr);
    print_r($new_arr);
    
    $con = mysqli_connect("localhost" , "root" , "shourya121","php_db");
    print_r($con);

    $create_table_query = "create table  if not exists College_Students(
        Sno int unique auto_increment ,
        FirstName varchar(30) not null ,
        LastName varchar(30) not null ,
        city enum('Bhopal' , 'Indore' , 'Jharkhand' , 'Khandwa'),
        photo varchar(200) ,
        gender enum('Male' , 'Female' , 'Other')
    );";

    if ($con->query($create_table_query) === TRUE){
        echo "<h3> Table has been successfully created </h3>";
    }else{
        echo "<p>Failed to create table</p>";
    }

    $insert_query = sprintf(
        "insert into  college_students(FirstName,LastName,city,photo,gender) values(\"%s\" , \"%s\" ,\"%s\" ,\"%s\" , \"%s\");",
        $_POST['firstname'],$_POST['lastname'],$_POST['city'] ,(getcwd(). "/upload/" . $_FILES['photo']['name']) ,$_POST['gender']
    );

    if ($con->query($insert_query)){
        echo "<h2>Record Successfully created</h2>";
    }else{
        echo "record not created";
    }

    $con->close();

    ?>
</body>
</html>