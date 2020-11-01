<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' ?>
<h1> <?php  echo $title ?></h1>
    
    <?php

    //a vairable
    $num = 3 ;

    //a example of array
    //an array of the same datatype
    $numbers = array(1,2,3,4,5,909,7,8,9,10,50,70,100,200, 600,6,5444,404);

    //prints the value at the index 5 (in this case the number 6)
    echo $numbers[5];
    echo "<p>$numbers[9]</p>";

    $size= count($numbers);
    echo "<p> The size of the declared array is : $size </p>";

    echo "<p> The values in the array are as follows : </p>";
    for ($count = 0; $count < $size; $count++){
        
        echo "<p>$numbers[$count]</p>";
    }


    ?>

<?php require 'includes/footer.php' ?>