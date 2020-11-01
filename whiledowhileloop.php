<?php 
    $title = "While and DoWhile Loops";
    include 'includes/header.php' ?>
   <h1> <?php  echo $title ?></h1>

    <?php

        $grade =0;
        // infinite loops
        // while($grade < 10) // could be != 
        // {
        //     echo '<p> I am les than 10 </p>';
        // }
        
        // a loop that runs until a condition is met.
        while($grade < 10 ) {
            echo '<p> I am les than 10 </p>';
            $grade++;
        }
        echo "exits loop";
        

    ?>
    <!-- runs atleast once, even if the condition isnt true. Runs before checking the condition -->
    <h1>Do While Loops </h1>
    
    <?php
        $grade = 0;
        do{
            echo '<p> A simple do while loop </p>';
            $grade++;
        }
        while($grade < 10);

    ?>

<?php require 'includes/footer.php' ?>