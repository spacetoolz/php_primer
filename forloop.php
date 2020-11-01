<?php 
    $title = "Simple ForLoops";
    include 'includes/header.php' 
?>

<h1> <?php  echo $title ?></h1>

    <?php

        //For loops in php is like for loops in c

        for($count = 0; $count<5; $count++){
            echo '<p> Hello World </p>';

        }

        for($count = 0; $count<5; $count++){
            echo "<p>The value of count at this interval is: $count </p>";
            

        }

    ?>
    
    <?php require 'includes/footer.php' ?>