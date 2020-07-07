<?php
	session_start();
	$pagetitle = "Witaj";
	include 'include/all/head.php';
	include 'include/all/header.php';
	if (!isset($_SESSION['active'])) {
		$_SESSION['active'] = 1;
	}
?>

		<div class="content_box start-screen  px-4 w-100 h-100 d-flex align-items-center justify-content-center">
		<div class="d-flex flex-column align-items-center w-100-m">
			<h1 class="text-white">Prawko Plus</h1>
			<a href="logowanie.php" class="w-100"><button class="btn_bnb btn-primary_bnb">Zaloguj się</button></a>
			<a href="rejestracja.php" class="w-100"><button class="btn_bnb btn-secondary_bnb">Zarejestruj się</button></a>
		</div>
			

		</div>


<?php include 'include/all/footer_script.php'; ?>
