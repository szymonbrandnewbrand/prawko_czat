<?php
	session_start();
	$pagetitle = "Przypomnienie hasła";

	include 'include/all/head.php';
	include 'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<form action="resetowanie_hasla.php" method="POST" class="w-100 d-flex flex-column align-items-center">
				<input type="email" required placeholder="adres e-mail" name="email" class="form_input"><br>
				<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} {
				} ?>
				<input type="submit" value="Zresetuj hasło" class="btn_bnb btn-primary_bnb">
			</form>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include 'include/all/footer_script.php'; ?>