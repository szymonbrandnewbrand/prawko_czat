<?php
	session_start();
	$pagetitle = "Start";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
	if (!isset($_SESSION['active'])) {
		$_SESSION['active'] = 1;
	}
	$_SESSION['zalogowany'] = 1;
?>
<div class="content_box start-screen-admin w-100 h-100 d-flex align-items-center justify-content-center">
	<div class="d-flex flex-column justify-content-center align-items-center w-100-m bg-grey h-100-custom border_radius mt_60 p-4">
		<h5 class="text-white text-bold text-center">Panel Admina</h5>
		<h5 class="text-white text-light text-center">Imie Nazwisko</h5>
		<a href="lista_osk.php" class="w-100"><button class="btn_bnb btn-osk"><i class="fas fa-search mr-3"></i>Lista OSK</button></a>
		<a href="dodaj_osk.php" class="w-100"><button class="btn_bnb btn-osk_ins_praktyki">+ Dodaj OSK</button></a>
		
		
	</div>
	
</div>
<?php include $pageprefix.'include/all/footer_script.php'; ?>