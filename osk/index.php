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
<div class="content_box start-screen-osk w-100 h-100 d-flex align-items-center justify-content-center">
	<div class="d-flex flex-column justify-content-center align-items-center w-100-m bg-grey h-100-custom border_radius mt_60 p-4">
		<h5 class="text-white text-bold text-center">Panel OSK</h5>
		<h5 class="text-white text-light text-center">Nazwa OSK (numer)</h5>
		<a href="kursanci.php" class="w-100"><button class="btn_bnb btn-osk">Kursanci</button></a>
		<a href="instruktorzy.php" class="w-100"><button class="btn_bnb btn-osk_ins_praktyki">Instruktorzy</button></a>
		<a href="powiadomienia_osk.php#last" class="w-100"><button class="btn_bnb btn-osk_powiadomienia">Dodaj powiadomienie</button></a>
		
		
	</div>
	
</div>
<?php include $pageprefix.'include/all/footer_script.php'; ?>