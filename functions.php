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

function init() {
    say_Something();
    echo "<br>";
    calculate();
}

function calculate() {
    echo 49 + 40;
} 

function say_Something() {
    echo "Hello Student, do you like the class? yes? okay great!";

}

init();

?>


</body>
</html>