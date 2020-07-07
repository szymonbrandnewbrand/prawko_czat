<?php
	session_start();
	$pagetitle = "Sukces";

	include 'include/all/head.php';
	include 'include/all/header.php';
	unset($_SESSION['active']);
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<h1>Udało się</h1>
			<a href="logowanie.php" class="w-100"><button class="btn_bnb btn-primary_bnb">Zaloguj się</button></a>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include 'include/all/footer_script.php'; ?>