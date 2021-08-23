<?php
    include "db.php";
    include "functions.php";
       UpdateTable();
?>



<?php include "includes/header.php"?>
<body>
    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="POST">
                <div class="form-group">
                    <label for = "username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                <label for = "password">Password</label>
                    <input type="password" name="password" class="form-control"><br>
                </div>
                <div class="form-group">
                    <select name="id" id="">

                    <?php

                    showAllData();


                    ?>
                        
                    </select>
                </div><br>
                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>
            
        </div>


    <?php include "includes/footer.php"?>