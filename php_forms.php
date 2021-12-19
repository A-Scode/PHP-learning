<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv ="refresh" content = "3"> -->
    <link rel="stylesheet" type="text/css" href= "css/php_forms.css">
    <title>PHP Forms</title>
</head>
<body>
    <h1 align = "center">PHP Forms</h1>
    <form method = "POST" action = "check_form.php" name = "register" enctype= "multipart/form-data">
        <label for = "profile_photo" style="display:flex;place-items:center;justify-content:center;" ><img src = "css/unkownUser.svg" id = "photo_label" /></label>
        <input  type="file" name="photo"  id="profile_photo" accept = ".jpg , .jpeg , .png , .svg" hidden />
        <label for="firstname">FirstName</label>
        <input name = "firstname" id = "firstname" type="text" max=20  />
        <label for = "lastname" >LastName</label>
        <input name = "lastname" id = "lastname"  type= "text" max=20 />
        <label for="city">Select City</label>
<select id = "city">
        <option value ="Indore">Indore</option>
        <option value="Bhopal">Bhopal</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value = "Khandwa">Khandwa</option>
</select>
        <label >Gender</label>
        <div class="gender_radio">
            <div><input  type="radio" name="gender" id="Male"  value="Male"><label for="Male">Male</label></div>
            <div><input  type="radio" name="gender" id="Female"  value="Female"><label for="Female">Female</label></div>
            <div><input  type="radio" name="gender" id="Other"  value="Other"><label for="Other">Other</label></div>
        </div>

        <input  type ="submit" />
    </form>

    <?php
    ?>
    
</body>
<script src="scripts/php_forms.js"></script>
</html>