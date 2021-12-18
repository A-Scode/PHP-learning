<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "css/php_forms.css">
    <title>PHP Forms</title>
</head>
<body>
    <h1 align = "center">PHP Forms</h1>
    <form method = "POST" action = "check_form.php" >
        <label for="firstname">FirstName</label>
        <input id = "firstname" type="text" max=20  />
        <label for = "lastname" >LastName</label>
        <input id = "lastname"  type= "text" max=20 />
        <label for="city">Select City</label>
        <select id = "city">
        <option value ="Indore">Indore</option>
        <option value="Bhopal">Bhopal</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value = "Khandwa">Khandwa</option>
</select>


        <input type ="submit" />
    </form>

    <?php
    ?>
    
</body>
</html>