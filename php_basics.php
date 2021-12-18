<?php 
session_start(); //session must be at top of file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    +
    <title>Testing PHP</title>
</head>
<body>
    <h1>This is some Heading</h1>
    <?php

    echo "<h2>Hello php</h2>";
    echo("<h3>this is some php</h3>"); //echo is marginally faster than print
    print("<h4>here and there</h4>");
    PRiNT "<h5>and also here</h5>";  //ways to print in php
    //in php keywords are not case sensitive

    $car= "swift dzire"; // varible start with $ and are case sensitive
    $Car = "maruti";

    echo "<p style = 'font-size:20px;'
    
    >this is car : <i>",$car,"</i> this is Car : <i>",$Car,"</i></p>" ;

    echo "<p>Now using for loop in php </p>";
    for ($i =0 ; $i<=5; $i++){
        echo "<h4>I'am heading" , $i+=1 , "</h4>" ;
    }

    //while loop
    $i = 0;
    while($i < 5){
        echo "<p>I'am i = " ,$i , "</p>";
        $i++;
    }

    function sum($a , $b){
        return $a+$b;
    }

    echo "<p>" , sum(5,10) ,"</p>";

    $cars = array("maruti"=>"suzuki", 'peter',"range"=>"rover", "bmw");
    echo json_encode($cars);
    $cars_json = json_encode($cars);
    // echo json_decode($cars_json)["range"];
    
    class human {
        //properties
        public $name ;
        private $gender;
        protected $age;

        const str = "<p>this is some const string</p>";

        //methods
        function __construct($name , $age, $gender){
            $this->name = $name;
            $this->gender = $gender ;
            $this->age = $age;
        }
        function get_details(){
            printf("<p>name : %s , age : %d , gender : %s</p>",$this->name,$this->gender,$this->age);
        }
        function get_name(){
            return $this->name;
        }
    }

    var_dump($cars);

    $float = 10.5656165; //global
    var_dump($float);

    function change_global($flt){
        global $float;
        $float = $flt;
        return $float;
    }
    echo "<h3>changed_global value by local <br> var " , change_global(74.462), "</h3>";

    $bool = true;
    var_dump($bool);

    $anjali = new human("anjali",16, "F");

    $anjali->get_details();//here -> is used instead of . to access method or propertes
    echo $anjali->get_name();

    echo human::str;
    print_r($_SERVER);
    echo "<p>",json_encode($_REQUEST),"</p>";
    echo "<p>",json_encode($_GET),"</p>";
    echo "<p>",json_encode($_POST),"</p>";
    echo "<p>",json_encode($_COOKIE),"</p>";
    echo "<p>",json_encode($_ENV),"</p>";
    echo "<p>",json_encode($_SESSION),"</p>";


    $new_cars = array("rollce"=>"royals" , "range"=>"rover", "bugati", "bugati"=>"veron");
    echo "<h3>new_cars " . json_encode(array_keys($new_cars)) . "</h3>";
                                        //will check for keys

    //static variable 
    function change_static(){
        static $a = 0;
        $a++ ;
        echo"<h3>static variable a : " , $a , "</h3>";
    }

    //for loop
    for($i=0 ;$i<=4; $i++){
    change_static();
    }

    //while
    $i =0 ;
    while($i < 5){
        ++$i;
        change_static();
    }

    //do while
    do{
        $i++;
        change_static();

    }while ($i < 10);

    //foreach loop
    foreach($new_cars as $key=>$value){
        echo "<h4>element of new_cars : ",$key , "=>" , $value ,"</h4>";
    }

    //constants
    define("some_const", 5-7*20); //precalulated saved in some_const
    echo "<p>" , some_const*2 , "</p>";//136
    
    //str funcs
    $str = "this is some string";

    echo "<h4> strlen($str) : " ,strlen($str) ,"</h4>";
    echo "<h4> str_word_count($str) : " , str_word_count($str) ,"</h4>";
    echo "<h4> strrev($str) : " , strrev($str) ,"</h4>";
    echo "<h4> strpos($str,'some') : " , strpos($str,'some') ,"</h4>";
    echo "<h4> str_replace('some','one and only',$str) : " , str_replace('some','one and only',$str) ,"</h4>";

    //casting
    echo "<p>typeof : " , var_dump((string) $i) , "</p>";

    //type checking functions
    printf("<p> 5.07 is float or not : %s</p>", is_float(5.07)?"true":"false");
                //similarly , is_int, is_integer,is_iterable,is_infinite,is_finite,is_nan

                
    //php maths func - pi(), min(), max(), abs(), sqrt(), round(), rand()

    echo "<p> maths func max(10,50,55,11,77,22.22,11.1) : ",max(10,50,55,11,77,22.22,11.1),"</p>";
    echo "<p> maths func rand(10,5000) : ",rand(10,5000),"</p>";
    echo "<p> maths func pi() : ",pi(),"</p>";

    die("unable to work anymore-die()");
    echo $anjali->get_name(); //will not reach to this due to die()

    ?>
</body>
</html>