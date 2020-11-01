<?php 
    $title = "Functions";
    include 'includes/header.php'
 ?>
<h1> <?php  echo $title ?></h1>
<?php


    // Defining a function 

    function writeMessage(){
        echo ' A simple function <br/>';
    }

    // Calling a function
    writeMessage();

    echo "<hr/>";


    // Defining functions with parameters 

    function addfunction( $num1, $num2) {

        $sum = $num1 + $num2;
        echo " The sume of $num1 and $num2 is $sum <br/> ";
        
        
    }

    function changeNum(&$num){ //pass by reference

        $num = $num + 10;
        //$num+=10; another way of writing the above statement
        //print "The new value of num is : <br/> ";
    }
// defie retutrn function
    function returnProduct($num1, $num2){

        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    addfunction(10, 20);
    addfunction("10", "50"); 
    //addfunction($num, 500);
    
    changeNum($num);
    echo $num . '<br/>';


    $return_value  = returnProduct(10,200);
    echo " The product of the numbers are :  $return_value <br/>";

?>
   
 <?php require 'includes/footer.php' ?>