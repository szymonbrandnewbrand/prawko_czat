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

		<div class="content_box start-screen-kursant-absolwent w-100 h-100 d-flex align-items-center justify-content-center">
		<div class="d-flex flex-column justify-content-center align-items-center w-100-m bg-white h-100-custom border_radius mt_60 p-4">
			<!-- Jeżeli kursant zakończy już cały kurs wyświetla mu się taki ekran -->

			<h5 class="text-primary text-bold text-center">Cześć! <br>Gratulacje! Ukończyłeś kurs.</h5>
			<h5 class="text-primary text-light text-center">Szerokiej drogi!</h5>


			<p class="mt-5 text-secondary">Mamy coś dla Ciebie na naszym portalu dla fanów motoryzacji. Wpadnij do nas!</p>

			<a href="karta_osk.php" class="w-100"><button class="btn_bnb btn-osk">Eventica</button></a>



		</div>
			

		</div>


<?php include $pageprefix.'include/all/footer_script.php'; ?>
