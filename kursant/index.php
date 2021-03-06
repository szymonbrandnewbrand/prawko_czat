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

		<div class="content_box start-screen-kursant w-100 h-100 d-flex align-items-center justify-content-center">
		<div class="d-flex flex-column justify-content-center align-items-center w-100-m bg-white h-100-custom border_radius mt_60 p-4">
			<!-- Jeżeli założył konto ale jeszcze OSK nie przydzieliło mu instruktora to ma taki komunikat -->

			<h5 class="text-primary text-bold text-center">Cześć! <br>Oczekujesz na przydzielenie do grupy.</h5>
			<h5 class="text-primary text-light text-center">Skontaktuj się ze swoim OSK!</h5>

			<!-- Jeżeli założył konto i OSK przydzieliło już do niego instruktora teorii to ma taki komunikat -->

			<!-- <h5 class="text-primary text-bold text-center">Cześć! <br>Jesteś w trakcie nauki teorii</h5> -->

			<!-- Jeżeli założył konto i OSK przydzieliło już do niego instruktora praktyki to ma taki komunikat -->

			<!-- <h5 class="text-primary text-bold text-center">Cześć! <br>Jesteś w trakcie nauki praktyki</h5> -->


			<p class="mt-2 text-secondary">Twoje kontakty:</p>

			<a href="karta_osk.php" class="w-100"><button class="btn_bnb btn-osk">Nazwa OSK</button></a>


			<a href="karta_teori.php" class="w-100"><button class="btn_bnb btn-osk_ins_teori">Jan Nowak - Instruktor Teorii</button></a>
			

			<a href="karta_praktyki.php" class="w-100"><button class="btn_bnb btn-osk_ins_praktyki">Adam Kowal - Instruktor Praktyki</button></a>
		</div>
			

		</div>


<?php include $pageprefix.'include/all/footer_script.php'; ?>
