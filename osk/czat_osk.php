<?php
	session_start();
	$pagetitle = "OSK Czat";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<h5 class="text-secondary text-center text-light bg-white w-100 border_top_radius py-2">Jan Kowalski</h5>

			<div class="czat_window px-3">
				<div class="inbox_container">
					<div class="wiadomosc inbox"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				
				<div class="sendbox_container">
					<div class="wiadomosc sendbox"><p class="msg">sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				<div class="sendbox_container">
					<div class="wiadomosc sendbox"><p class="msg">sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				<div class="sendbox_container">
					<div class="wiadomosc sendbox"><p class="msg">sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsvsdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				<div class="inbox_container">
					<div class="wiadomosc inbox"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>
				<div class="inbox_container" id="last">
					<div class="wiadomosc inbox"><p class="msg">!!!sdkhfgsdkjfhbsd sdkjfhbsdkjhfb sdjbsdhfbsdjkbsdh<br>sdsdgjfgvsdgvjfsv</p></div><p class="info_msg text-secondary text-light">20-07-2020</p>
				</div>

			</div>



			<div class="czat_input_block w-100-m d-flex justify-content-center px-2 pb-2 bg-white">
				<form action="#" method="POST" class="d-flex align-items-center czat_form w-100">
					<textarea id="w3review" type="text" name="wiadomosc" placeholder="Napisz wiadomosc" class="czat_input" rows="1" cols="50"></textarea>
					<input type="submit" value="Wyślij" class="btn-send">
				</form>
			</div>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>