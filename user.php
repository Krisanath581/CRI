<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo/favicon_cri.png">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
        
    </div>
    <div class="container-fluid">
<header id="navbar" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
      <img src="logo/logocri.png" alt="Logo" width="100%" height="57" class="d-inline-block align-text-top">
        </a>
       
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">โปรแกรม</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <h5 class="mt-4">Welcome User : <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h5>
      <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </header>
</div>


<div class="container">
    <!-- Navbar -->
    

    <!-- <div class="px-4 py-5 my-5 text-center">
      Centered hero
    <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div> -->
  <?php 
$stmt = $conn->query("SELECT * FROM stock_images");
$stmt->execute();
$stocks = $stmt->fetchAll();

?>

<!-- Display stock images -->
<div class="row text-center">
    <h3 class="display-5 fw-bold text-body-emphasis text-center">โปรแกรม</h3>

    <?php foreach($stocks as $stock_images) { ?>
    <div class="col-sm-6 col-md-4 col-lg-3 my-3">
        <div class="card">
            <img src="./upload/<?=$stock_images['images'];?>" class="card-img-top" alt="" width="100%" height="200">
            <div class="card-body">
                <h5 class="card-title"><?=$stock_images['img_name'];?></h5>
                <p class="card-text"><?=$stock_images['img_content'];?></p>
                <a href="./upload_files/<?=$stock_images['files'];?>" class="btn btn-primary" download >DOWNLOAD</a>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom my-4"></div>
  </div>
</div>
    </div>
</div>
</body>
</html>