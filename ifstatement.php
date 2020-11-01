<?php 
    $title = "IFStatements";
    include 'includes/header.php' ?>
<h1> <?php  echo $title ?></h1>
<?php

echo "<h2> If Statements </h2>";

$grade = 50;

// a simple if condition, nothing new here
if($grade >= 50 ){
echo '<h3 style = "color: green"> You have passed! </h3>';
}
else{
    echo '<h3 style = "color: red"> You have failed this city! </h3>';
}

$grade = 'C';

if ($grade == 'A'){

    echo '<h2 style = "color: green"> You are a superstar! </h2>';

}
else if($grade == 'B') {
    echo '<h2 style = "blue: red"> You did well! </h2>';
}
else{
    echo '<h2 style = "color: red"> You have failed :-( </h2>';
}

?>

<?php require 'includes/footer.php' ?>