<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File handling</title>
</head>
<body>
    <?php

    //to just simply read a file without newline chars and get size of file 
    echo "<p>" ,nl2br(readfile("file_handling/samplefile.txt")) , "</p>";
    echo "<h4>" , basename("file_handling/samplefile.txt"), "</h4>" ; //basename gives name of the file
    echo("<p> sampelfile file exists : " .  (file_exists("file_handling/samplefile.txt")?"true":"false") . "</p>");
    echo "<p>filesize of samplefile : " . filesize("") . "bytes</p>"; //get filesize

    echo "<p> file_get_contents : " . nl2br(file_get_contents("file_handling/samplefile.txt")) . "</p>";
                                    // nl2br() convert \n to <br/>
    
    $sample_file = fopen("file_handling/samplefile.txt","r") ;//r,w,a,x,r+,w+,a+,x+

    echo "<p>fread : " . nl2br( fread($sample_file , filesize("file_handling/samplefile.txt"))) . "</p>"; //pointer reached end

    fseek($sample_file , 0 , SEEK_SET);

    echo "<p> fgets : " . fgets($sample_file ) . "</p>"; //gets single line form file

    echo "<p>file pointer at : " . ftell($sample_file) . "</p>";

    echo "<p>realpath() : " . realpath("file_handling/samplefile.txt") . "</p>";
    fclose($sample_file);
    mkdir("sampledir");

    //writing a file
    $csvfile = fopen("file_handling/samplecsv.csv" , "w");

    $mycsv_headers = array("Name" , "Class" , "RollNo", "Department");

    fputcsv($csvfile , $mycsv_headers);

    $mycsv_data = array(
        array("Shourya", 303 , "20" , "CSE"),
        array("Shaan", 307 , "21" , "CSIT"),
        array("Vinamra", 304 , "22" , "CSDS"),
        array("Vinay", 307 , "23" , "CSIT"),
        array("Zehen", 303 , "24" , "CSE"),
    );

    foreach ($mycsv_data as $key => $value ){
        fputcsv($csvfile , $value);
    }
    fclose($csvfile);

    rmdir("sampledir");
   

    ?>
</body>
</html>