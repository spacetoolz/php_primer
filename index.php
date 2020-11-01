<?php 
    $title = "Home - PHP Master";
    include 'includes/header.php' ?>
<!-- basic Html which we all know and love -->
<h1> <?php  echo $title ?></h1>
    <br/>
    
    <?php 
    
    // Printing to HTML using echo/ php
    echo 'Hello PHP!';
    echo '<br/>';
    echo 'PHP is awesome ehh?';

    
            echo '<br/>';
            // declaration of a variable and storing of some information in it
            $name = "Brandon Dyce";
            $age = 21;

            echo $name;
            echo '<h1> My Name is: ' .$name. '<h1/>';
            //echo '<br/>';
            echo '<h1> My age is: ' .$age. '<h1/>';

            // this way seems most effective - double quotes it is! (anothr way of achievig the sme )
            echo "<h1> My name is $name </h1>";

            

    ?>
            <button type="button" class="btn btn-primary">Sample</button>
            <button type="button" class="btn btn-secondary">Does Nothing</button>
            <button type="button" class="btn btn-success">You can Click</button>

    <?php require 'includes/footer.php' ?>
