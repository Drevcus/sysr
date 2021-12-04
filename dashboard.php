<?php
    $page_title = "Dashboard";
    include './layout/header.php';

    if(!isset($_SESSION['is_logged'])){
        $_SESSION['message_error'] = "Access denied, please login.";
        header('location: login.php');
    }

    # echo $_SESSION['is_logged']['email'];
?>

<h1><?php echo $page_title?></h1>
<h2>Welcome <?php echo $_SESSION['is_logged']['fullname'];?></h2>
<hr />
<div class="container">
	<div class="row">
		<div class="col mb-2 mb-lg-0">
			<div class="card">
				<div class="card-header text-center">
					<h5>Reports</h5>
				</div>
				<div class="card-body">
					<p>test01</p>
					<p>test02</p>
				</div>
			</div>
		</div>
		<div class="w-100 d-block d-lg-none"></div>
		<div class="col mt-2 mt-lg-0">
			<div class="card">
				<div class="card-header text-center">
					<h5>Responses</h5>
				</div>
				<div class="card-body">
					<p>test01</p>
					<p>test02</p>
				</div>
			</div>
		</div>
	</div>
</div>

<a href="logout.php">Logout</a>
<?php
    include './layout/footer.php';
?>