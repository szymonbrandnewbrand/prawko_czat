<?php
	session_start();
	$pagetitle = "Kursant";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Jan Kowalski</h1>
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100p">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Kursant teorii</h5>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-map-pin text-secondary mr-3"></i> ul. Kwiatowa 52, Kraków</p>
				<a href="mailto:jan@gmail.com" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-envelope text-secondary mr-3"></i> jan@gmail.com</a>
				<a href="tel:+48 789 456 123" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-phone text-secondary mr-3"></i> +48 789 456 132</a>
				<p class="mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-id-badge text-secondary mr-3"></i> Kategoria: B</p>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-tasks text-secondary mr-3"></i> Status: Nauka teori</p>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-user text-secondary mr-3"></i> Instruktor Teorii: Jan Nowak</p>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-user text-secondary mr-3"></i> Instruktor Praktyki: Adam Kowal</p>
				
				

				<a href="czat_osk.php#last" class="w-100 mt-5"><button class="btn_bnb btn-primary_bnb">Napisz wiadomość</button></a>


			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>