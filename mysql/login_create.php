<?php
include "db.php";
include "functions.php";

createRows(); 


    //I would do this, but it is not safe especially during production
    // $username = $_POST['username'];
    // $password = $_POST['password'];

    //So I would do the following instead


    //We can use the 'pdo' method of connecting to a database or the other below

    // $host = 'localhost';
    // $db = 'loginapp';
    // $user = 'root';
    // $password = '';
    // $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    // $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    // if($pdo) {
    //     echo "We are connected";
    // } else {
    //     die("Database connection failed");
    // }

    // $query = "INSERT INTO users(username, password)";
    // //Below, using placeholders instead of using the actual values in the varialbles
    // $query .= "VALUES (:username, :password)";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(array(
    //     ':username'=> $_POST['username'],
    //     ':password'=>$['password']
    // ));




//We can also use the 'mysqli_connect' method to connect to a database




?>
<?php include "includes/header.php"?>









<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="POST">
                <div class="form-group">
                    <label for = "username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                <label for = "password">Password</label>
                    <input type="password" name="password" class="form-control"><br>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>


  <?php include "includes/footer.php"?>