<?php
	session_start();
	$pagetitle = "Nowy Instruktor";
	$pageprefix = "../";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-end pt-4 pb-0 w-100-m h-100-custom border_top_radius mt_60">
			<div class="content_box d-flex flex-column align-items-center justify-content-start px-4 w-100 bg-white border_top_radius h-100-custom2">
				<h5 class="text-secondart text-center mb-3 screen-title pb-2">Nowy OSK</h5>
				<form action="lista_osk.php" method="POST" class="w-100 d-flex flex-column align-items-center">
					<input type="text" required placeholder="Nazwa" name="name" class="form_input"><br>
					<input type="text" required placeholder="Numer id" name="nr_id" class="form_input"><br>
					<p class="text-secondary text-light w-100 text-left">Kategorie kursów:</p>
					<div class="d-flex w-100 mb-3">
					<label class="mx-2"><input type="checkbox"> A</label>
					<label class="mx-2"><input type="checkbox"> B</label>
					<label class="mx-2"><input type="checkbox"> C</label>
					<label class="mx-2"><input type="checkbox"> D</label>
					<label class="mx-2"><input type="checkbox"> E</label>
					</div>
					<input type="email" required placeholder="Adres e-mail" name="email" class="form_input"><br>
					<input type="text" placeholder="Numer telefonu" name="tel" class="form_input hr"><br>
					<p class="text-secondary w-100 text-left">LOGOWANIE</p>
					<input type="text" required placeholder="login" name="login" class="form_input"><br>
					<input type="password" required placeholder="hasło" name="haslo" class="form_input"><br>
					<input type="password" required placeholder="Powtórz hasło" name="haslo2" class="form_input"><br>
					<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} ?>
					<input type="submit" value="Dodaj OSK" class="btn_bnb btn-primary_bnb">
				</form>

			
				
			</div>
			
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>