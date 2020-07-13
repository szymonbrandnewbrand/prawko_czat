<?php
	session_start();
	$pagetitle = "Logowanie";
	$pageprefix = "";
	include $pageprefix.'include/all/head.php';
	include $pageprefix.'include/all/header.php';
	unset($_SESSION['zalogowany']);
?>

<!-- Edytowalna treść strony -->


		<div class="content_box d-flex flex-column align-items-center justify-content-center px-4 w-100-m bg-white h-100-custom border_top_radius mt_60">
			<form action="kursant/index.php" method="POST" class="w-100 d-flex flex-column align-items-center">
				<input type="text" required placeholder="Login" name="login" class="form_input"><br>
				<input type="password" required placeholder="Hasło" name="haslo" class="form_input"><br>
				<p class="w-100 text-right"><a href="przypomnienie_hasla.php" class="text-secondary">Nie pamiętam hasła</a></p>
				
				<?php if (isset($SESSION_['alert'])) {echo '<p class="text-alert">'.$SESSION_['alert'].'</p>';} {
					
				} ?>
				<input type="submit" value="Zaloguj się" class="btn_bnb btn-primary_bnb">
			</form>
				<a href="osk/index.php" class="w-100"><button class="btn_bnb btn-osk">OSK</button></a>
				<a href="admin/index.php" class="w-100"><button class="btn_bnb btn-osk">Admin</button></a>
				<a href="instruktor/index.php" class="w-100"><button class="btn_bnb btn-osk">Instruktor</button></a>
		</div>


<!-- Koniec edytowalnej treści strony -->


<?php include $pageprefix.'include/all/footer_script.php'; ?>