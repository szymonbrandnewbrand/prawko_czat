<?php
	session_start();
	$pagetitle = "Moje konto";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Nazwa OSK</h1>
			<h5 class="text-white text-center">numer</h5>
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Moje konto</h5>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-user text-secondary mr-3"></i> Nazwa OSK</p>
				<a href="mailto:jan@gmail.com" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-envelope text-secondary mr-3"></i> jan@gmail.com</a>
				<a href="tel:+48 789 456 123" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-phone text-secondary mr-3"></i> +48 789 456 132</a>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-map-pin text-secondary mr-3"></i> ul. Kwiatowa 52, Kraków</p>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-map-pin text-secondary mr-3"></i> Małopolskie</p>
				<p class="mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-id-badge text-secondary mr-3"></i> Kategorie: A B C</p>
				<p class="mb-2 text-secondary w-100 dane-konto py-2 hr"><i class="fas fa-id-card text-secondary mr-3"></i>Numer OSK: 456879</p>
				<p class="mb-2 text-secondary w-100 dane-konto py-2"> osk123 (login) </p>
				<a href="<?php echo $pageprefix; ?>zmiana_hasla.php" class="mb-2 text-secondary w-100 dane-konto py-2"> Zmień hasło </a>

				<a href="edycja_konta.php" class="w-100"><button class="btn_bnb btn-primary_bnb">Edytuj</button></a>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>