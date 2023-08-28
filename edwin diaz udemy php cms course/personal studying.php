<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php


$title = "nikola nakovski official site";
    
    
    ?>


<h1>
    <?php

        echo $title;

    ?>
</h1>



<!-- another exercise -->


<?php


echo "<h6>Hello</h6>";
    
    
    ?>


<h1>
    <?php

        echo $title;

    ?>
</h1>



<?php

// arrays in php
$numberList = array();

// $numberList = []; newer way of making arrays in php
$numberList = ["hello","hi"];

?>

<?php

// assoicative arrays

// in order for us to display a certain value in an array we need to know its position
//this would be a huge problem if we have lots and lots of data in an array

//we can actually find them by label, in order to fix this, by assiging them a value

$numbers2 = array('juanita','maria','jose');
echo $numbers2[2] . "<br>" . "<hr>";


//these are associative arrays:
$names = array("first_name" => 'Nikola', 'last_name' => 'Nakovski');
// print_r($names);

echo $names['first_name'] . " " . $names ['last_name']


 
?>

<!-- <?php
echo "<br>";
$counter = 1;
while($counter <= 10){
    echo "hello student" . $counter;
    echo "<br>";
    // $counter = $counter + 1; or:
    $counter ++;
}
 
?> -->

<hr style="height:5px;background-color:black;">

<?php
function greeting($message){
    echo $message;
}
greeting("hello student");


function calculate($number1, $number2){
    $sum = $number1 + $number2;
    echo "the sum of ".$number1." and ".$number2." is ".$sum;
}
echo "<br>";
calculate(50,50);
?>

<?php

function addNumbers($number3,$number4){
    $sum = $number3 + $number4;
    return $sum;
}
$result = addNumbers(34,64);
$result = addNumbers(100,$result);
echo "<br>";
echo $result;



?>


<hr style="height:5px;background-color:black;">

<?php

echo"global variable and scope";

$x = 'outside'; //global

function convert(){
    // global $x;
    $x = 'inside'; //local
}
echo  $x;

echo "<br>";


convert();
echo $x;
echo $x;

?>

<h1>constants lesson</h1>
<?php


$number = 10;
echo $number;

define("NAME", 1000);
// this is how we define constants in php

// NAME = 2000; we can never change the values of constants

echo"<br>";

echo NAME;

// from the test files
const CONSTANT = 'HELLO WORLD';
// CONSTANT = 'HELLO WORLD2'; unexptected token
echo CONSTANT;



?>


<hr style="height:5px;background-color:black;">

<h1>maths with php</h1>
<?php


$result = ceil(5.2);//6
echo $result;

$result2 = floor(5.8);//5
echo $result2;

$result3 = round(4.6);//5
echo $result3;




?>










</body>
</html>