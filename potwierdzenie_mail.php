<?php
	session_start();
	$pagetitle = "Sukces";

	include 'include/all/head.php';
	include 'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			
			<p class="text-center">Wysłaliśmy na Twój adres e-mail wiadomość z linkiem aktywacyjnym. Kliknij w link aby zakończyć proces rejestracji.</p>
			<p class="text-center">Jeżli nie otrzymałeś wiadomości, kliknij w poniższy link.</p>
			<p class="text-center"><a href="sukces.php" class="text-secondary">Wyślij ponownie</a></p>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include 'include/all/footer_script.php'; ?>