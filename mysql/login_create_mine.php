<?php
if (isset($_POST['submit'])) {

    


    //I would do this, but it is not safe especially during production
    // $username = $_POST['username'];
    // $password = $_POST['password'];

    //So I would do the following instead


    //We can use the 'pdo' method of connecting to a database or the other below

     $host = 'localhost';
     $db = 'loginapp';
     $user = 'root';
     $password = '';
     $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
     $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
     if($pdo) {
         echo "We are connected";
     } else {
         die("Database connection failed");
     }

     $query = "INSERT INTO users(username, password)";
     //Below, using placeholders instead of using the actual values in the varialbles
     $query .= "VALUES (:username, :password)";
     $stmt = $pdo->prepare($query);
     $stmt->execute(array(
         ':username'=> $_POST['username'],
         ':password'=>$_POST['password']
     ));




//We can also use the 'mysqli_connect' method to connect to a database
   
}






?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create_mine.php" method="POST">
                <div class="form-group">
                    <label for = "username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                <label for = "password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>


    </div>
    



</body>
</html>