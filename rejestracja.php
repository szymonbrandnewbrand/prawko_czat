<?php
	session_start();
	$pagetitle = "Rejestracja";
	$pageprefix = "";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<h5 class="text-secondart text-center mb-4 screen-title pb-2">REJESTRACJA</h5>
			<form action="potwierdzenie_mail.php" method="POST" class="w-100 d-flex flex-column align-items-center">
				<input type="text" required placeholder="Imię" name="imie" class="form_input"><br>
				<input type="text" required placeholder="Nazwisko" name="nazwisko" class="form_input"><br>
				<input type="email" required placeholder="Adres e-mail" name="email" class="form_input"><br>
				<input type="text" placeholder="Numer telefonu" name="tel" class="form_input"><br>
				<input type="text" required placeholder="Login" name="login" class="form_input"><br>
				<input type="password" required placeholder="Hasło" name="haslo" class="form_input"><br>
				<input type="password" required placeholder="Powtórz hasło" name="haslo2" class="form_input"><br>
				<input type="date" placeholder="Od kiedy chcesz zacząć" name="data" class="form_input"><br>
				<select name="kategoria" class="form_input" required>
					<option value="0">Wybierz Kategorie</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
				</select><br>
				<input type="number" required placeholder="Wybrany OSK" name="osk" class="form_input"><br>
				<label class="d-flex align-items-center">
				<input type="checkbox" required>
				<p class="text-secondary pl-2 mb-0">Akceptuje <a href="#">regulamin</a></p>
				</label>

				
				<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} ?>
				<input type="submit" value="Zarejestruj się" class="btn_bnb btn-primary_bnb">
			</form>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>