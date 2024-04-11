<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo/favicon_cri.png">
    <link rel="stylesheet" href="style.css">
    <title>CRI Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="form-search">
        <h3 class="mt-2">เข้าสู่ระบบ</h3>
        <hr>
        <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <div class="email">
                <label for="email" class="form-label">Email</label>
                <div class="inp-email">
                    <i class="bi bi-envelope-fill"></i>
                    <!-- <input id="email" type="text" placeholder="exmple@companny.com"> -->
                    <input id="email" type="email" class="form-control" name="email" aria-describedby="email" required>
                </div>

            </div>
            <div class="password">
                <label for="password" class="form-label">Password</label>
                <div class="inp-password">
                    <i class="bi bi-lock-fill"></i>
                    <!-- <input id="password" type="text" placeholder="password"> -->
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="btn-login">
            <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
            </div>
           
        </form>
        <hr>
        <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="register.php">สมัครสมาชิก</a></p>
    </div>
    
</body>
</html>