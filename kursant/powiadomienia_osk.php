<?php
	session_start();
	$pagetitle = "Powiadomienia OSK";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60 pb-0">
			<h5 class="text-secondary text-center text-light bg-white w-100 border_top_radius py-2">Nazwa OSK</h5>

			<div class="powiadomienia_window px-3">
				<div class="powiadomienia_container">
					<div class="wiadomosc inbox_powiadomienia"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				
				<div class="powiadomienia_container">
					<div class="wiadomosc inbox_powiadomienia"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				<div class="powiadomienia_container">
					<div class="wiadomosc inbox_powiadomienia"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>

			</div>




		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>