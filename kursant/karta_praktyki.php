<?php
	session_start();
	$pagetitle = "Instruktor praktyki";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Adam Kowal</h1>
			<h5 class="text-white text-center">Instruktor praktyki</h5>
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Dane kontaktowe</h5>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-user text-secondary mr-3"></i> Jan Nowak</p>
				<a href="mailto:jan@gmail.com" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-envelope text-secondary mr-3"></i> jan@gmail.com</a>
				<a href="tel:+48 789 456 123" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-phone text-secondary mr-3"></i> +48 789 456 132</a>
				
				

				<a href="czat_praktyka.php" class="w-100 mt-5"><button class="btn_bnb btn-primary_bnb">Napisz wiadomość</button></a>


			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>