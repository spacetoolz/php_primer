<?php 
    $title = "String Manipulation";
    include 'includes/header.php' ?>

<h1> <?php  echo $title ?></h1>

    <?php

        $phrase1 = "Studdent who attends class late,";
        $phrase2 = "In class, keep quiet.";
        $name = "brandon dyce";
        

        // to join two strings use the . operator and to add a space, just open a double quote " "
        echo $phrase1." ". $phrase2 . " ";
        echo '<br/>';
        // String Transofrmation
        //upercase the first letter of the first work
        echo 'Uppercase First letter : ' . ucfirst($name) . '<br/>';
        echo 'Uppercase First letter of each word : ' . ucwords($name)." is awesome! " . '<br/>';
        // makes the entre variable uppercase
        echo 'Upper case: '. strtoupper($name). '<br/>';
        // makes the string all lower case
        echo 'Lower case: '. strtolower("HOLLLLAA HOLLA WE DEM BOYZ"). '<br/>';
        echo '<hr/>';
        //allows you to repeat a string -- takes the string or variable followe by the amount of time you want it to repeat
        // the strtoupper allows the repeated string to be repeated in UPPER CASE
        echo 'Repeat String '. strtoupper( str_repeat('a', 10)). '<br/>' ;
        echo 'Get a substring : ' . substr($name, 5, 10 ) . '<br/>';
        // gets the index postion of the specificed character - spaces count
        echo 'Get postion of string ' . strpos ( $name, 'b') . '<br/>';
        echo 'Find Character " B " : ' . strchr($name, 'B') . '<br/>'; // will return null since there is no UPPER case B in the variable
        echo 'Find Character " d " : ' . strchr($name, 'd') . '<br/>'; //shoud return don dyce atleat
        echo 'Find Character " a " : ' . strchr($name, 'a') . '<br/>'; 

        echo 'Find the length of string : ' . strlen($name) . '<br/>'; // counts the number of characters in the string

        echo 'Without Trim' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides : ' . "A" . trim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the left : ' . "A" . ltrim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the right : ' . "A" . rtrim(" B C D "). "E" . '<br/>';

        echo 'Replace string with another : ' . str_replace("keep quiet", "shut up", $phrase2 ) . '<br/>';

        
 
    ?>

<?php require 'includes/footer.php' ?>