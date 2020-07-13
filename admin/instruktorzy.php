<?php
	session_start();
	$pagetitle = "Instruktorzy";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>
<!-- Edytowalna treść strony -->
<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
	<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100p">
		<h5 class="text-secondart text-center mb-3 screen-title pb-2">Instruktorzy</h5>
		
		

		<a href="dodaj_instruktora.php" class="w-100"><button class="btn_bnb btn-primary_bnb">+ Dodaj instruktora</button></a>
		<a href="lista_instruktorow_teori.php" class="w-100 mt-5"><button class="btn_bnb btn-osk_ins_teori">Instruktorzy teori</button></a>
		<a href="lista_instruktorow_praktyki.php" class="w-100"><button class="btn_bnb btn-osk_ins_praktyki">Instruktorzy praktyki</button></a>

		<h5 class="text-secondary text-light screen-title text-center mt-5">Nie aktywni</h5>
		<a href="lista_instruktorow_teori.php" class="w-100"><button class="btn_bnb btn-dezakt_bnb mt-0">Instruktorzy teori</button></a>
		<a href="lista_instruktorow_praktyki.php" class="w-100"><button class="btn_bnb btn-dezakt_bnb">Instruktorzy praktyki</button></a>
		
		
	</div>
	
</div>
<!-- Koniec edytowalnej treści strony -->
<?php include $pageprefix.'include/all/footer_script.php'; ?>