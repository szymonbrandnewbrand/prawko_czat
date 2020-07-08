<?php
	session_start();
	$pagetitle = "Edycja konta";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-start py-4 w-100-m h-100-custom border_top_radius mt_60">
			<h1 class="text-white text-center">Jan Kowalski</h1>
			<h5 class="text-white text-center">Kursant</h5>
			<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Edycja konta</h5>
				<form action="moje_konto.php" method="POST" class="w-100 d-flex flex-column align-items-center">
					<input type="text" required placeholder="Imię" name="imie" class="form_input" value="Jan"><br>
					<input type="text" required placeholder="Nazwisko" name="nazwisko" class="form_input" value="Kowalski"><br>
					<input type="email" required placeholder="Adres e-mail" name="email" class="form_input" value="jan@gmail.com"><br>
					<input type="text" placeholder="Numer telefonu" name="tel" class="form_input" value="789 456 123"><br>
					<input type="text" required placeholder="Login" name="login" class="form_input" value="janek123"><br>
					<input type="date" placeholder="Od kiedy chcesz zacząć" name="data" class="form_input" value="2020-07-20"><br>
					<select name="kategoria" class="form_input" required>
						<option value="0">B</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
					</select><br>
					<input type="number" required placeholder="Wybrany OSK" name="osk" class="form_input" value="45687"><br>
					<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} ?>
					<input type="submit" value="Zapisz" class="btn_bnb btn-primary_bnb">
				</form>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>