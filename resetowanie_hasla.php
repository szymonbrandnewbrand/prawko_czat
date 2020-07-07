<?php
	session_start();
	$pagetitle = "Nowe hasło";

	include 'include/all/head.php';
	include 'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<form action="sukces.php" method="POST" class="w-100 d-flex flex-column align-items-center">
				<input type="password" required placeholder="Podaj nowe hasło" name="haslo" class="form_input"><br>
				<input type="password" required placeholder="Powtórz nowe hasło" name="haslo2" class="form_input"><br>
				<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} {
				} ?>
				<input type="submit" value="Zresetuj hasło" class="btn_bnb btn-primary_bnb">
			</form>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include 'include/all/footer_script.php'; ?>