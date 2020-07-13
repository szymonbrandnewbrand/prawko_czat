<?php
	session_start();
	$pagetitle = "Edycja konta";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Jan Kowalski</h1>
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Kursant teorii</h5>
				<p class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-map-pin text-secondary mr-3"></i> ul. Kwiatowa 52, Kraków</p>
				<a href="mailto:jan@gmail.com" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="far fa-envelope text-secondary mr-3"></i> jan@gmail.com</a>
				<a href="tel:+48 789 456 123" class=" mb-2 text-secondary w-100 dane-konto py-2"><i class="fas fa-phone text-secondary mr-3"></i> +48 789 456 132</a>
				<form action="karta_kursanta.php" method="POST" class="w-100 d-flex flex-column align-items-center">
					<p class="text-left w-100 mt-2 mb-0 text-secondary">Status szkolenia:</p>
					<select name="status" class="form_input mt-2 text-secondary" required>
						<option value="0">Oczekujący</option>
						<option value="1">Nauka teori</option>
						<option value="2">Nauka praktyki</option>
						<option value="3">Absolwent</option>
						
					</select><br>
					<p class="text-left w-100 mt-2 mb-0 text-secondary">Instrukor teorii:</p>
					<select name="status" class="form_input mt-2 text-secondary" required>
						<option value="0">Nie przydzielony</option>
						<option value="1">Jan Nowak</option>
						<option value="2">Jan Nowak</option>
						<option value="3">Jan Nowak</option>
						<option value="4">Jan Nowak</option>
						<option value="5">Jan Nowak</option>
					</select><br>
					<p class="text-left w-100 mt-2 mb-0 text-secondary">Instruktor praktyki:</p>
					<select name="status" class="form_input mt-2 text-secondary" required>
						<option value="0">Nie przydzielony</option>
						<option value="1">Adam Kowal</option>
						<option value="2">Adam Kowal</option>
						<option value="3">Adam Kowal</option>
						<option value="4">Adam Kowal</option>
						<option value="5">Adam Kowal</option>
						<option value="6">Adam Kowal</option>
						<option value="7">Adam Kowal</option>
					</select><br>
					<input type="submit" value="Zapisz" class="btn_bnb btn-primary_bnb">
				</form>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>