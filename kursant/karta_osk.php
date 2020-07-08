<?php
	session_start();
	$pagetitle = "OSK";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Nazwa OSK</h1>
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Twoje OSK</h5>
				<a href="mailto:jan@gmail.com" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-envelope text-secondary mr-3"></i> jan@gmail.com</a>
				<a href="tel:+48 789 456 123" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-phone text-secondary mr-3"></i> +48 789 456 132</a>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-map-pin text-secondary mr-3"></i> ul. Kwiatowa 52, Kraków</p>
				

				<a href="czat_osk.php" class="w-100 mt-5"><button class="btn_bnb btn-primary_bnb">Napisz wiadomość</button></a>
				<a href="powiadomienia_osk.php" class="w-100"><button class="btn_bnb btn-osk_powiadomienia">Powiadomienia OSK</button></a>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>