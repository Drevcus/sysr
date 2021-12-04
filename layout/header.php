<?php
    session_start();
    require './helper/url.php';
    require './db-config/db.php';
    $url = new url();
    define('CSS_PATH', $url->base_url().'assets/css/');
    define('JS_PATH', $url->base_url().'assets/js/');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $page_title ?></title>
  </head>
  <body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $url->base_url(); ?>">SysR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<!-- Logged In Layout -->
					<?php if (isset($_SESSION['is_logged'])): ?>
					<li class="nav-item dropdown">
						<button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						<?php echo $_SESSION['is_logged']['fullname']; ?>
						</button>
						<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
							<a class="dropdown-item" href="<?php echo $url->base_url().'logout.php'; ?>">Logout</a>
						</div>
					</li>
					<!-- Non Logged In Layout -->
					<?php else: ?>
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li> -->
					<li class="nav-item dropdown">
						<button class="btn nav-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
						Guest
						</button>
						<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
							<a class="dropdown-item" href="<?php echo $url->base_url().'login.php'; ?>">Login</a>
							<a class="dropdown-item" href="<?php echo $url->base_url().'register.php'; ?>">Register</a>
						</div>
					</li>
					<!--
                    <li class="nav-item"><a class="nav-link" href="<?php echo $url->base_url().'login.php'; ?>">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $url->base_url().'register.php'; ?>">Register</a></li>
					-->
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Link</a></li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
					<?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Alert -->
        <div class="container">
            <div class="row">
            <div class="col-md-12 mx-auto mt-5">
                <?php if(isset($_SESSION['message_noti'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['message_noti']; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['message_error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['message_error']; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['message_noti']); ?>
                <?php unset($_SESSION['message_error']); ?>
            </div>
            </div>
        </div>
    <!-- Alert -->
    <div class="container">

    