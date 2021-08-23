<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $name = ['Edwin', 'Student', 'Peter', 'Samid', 'Mohad', 'Maria', 'Jane', 'Tom'];
    $minimum = 5;
    $maximum = 10;

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than five<br>";
    }
    if (strlen($username) > $maximum) {
        echo "Username cannot be longer  than ten";
    }

    if (!in_array($username, $name)) {
        echo 'Sorry you are not allowed';
    } else {
        echo "Welcome";
    }
}


?>