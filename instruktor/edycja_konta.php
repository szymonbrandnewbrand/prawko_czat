<?php
	session_start();
	$pagetitle = "Edycja konta";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-end pt-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Edytuj konto</h5>
				<form action="moje_konto.php" method="POST" class="w-100 d-flex flex-column align-items-center">
					<input type="text" required placeholder="Imie" name="imie" class="form_input" value="Jan"><br>
					<input type="text" required placeholder="Nazwisko" name="nazwisko" class="form_input" value="Kowalski"><br>
					<select name="rola" class="form_input" required>
						<option value="0">Wybierz role</option>
						<option value="1">Instruktor teorii</option>
						<option value="2" selected>Instruktor praktyki</option>
					</select><br>
					<input type="email" required placeholder="Adres e-mail" name="email" class="form_input" value="jan@gmail.com"><br>
					<input type="text" placeholder="Numer telefonu" name="tel" class="form_input hr" value="456 789 123"><br>
					<p class="text-secondary w-100 text-left">LOGOWANIE</p>
					<input type="text" required placeholder="login" name="login" class="form_input" value="jan123"><br>
					<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} ?>
					<input type="submit" value="Zapisz" class="btn_bnb btn-primary_bnb">
				</form>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>