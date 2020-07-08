<div class="navbar d-flex justify-content-between align-items-start w-100 pt-3" style="<?php if ($pagetitle == 'Logowanie' || $pagetitle == 'Sukces') {echo 'height: 50px;';} else {echo 'height: 50px;';} ?>">
	<?php
	if (isset($_SESSION['active'])) {
		if ($pagetitle == 'Start' || $pagetitle == 'Sukces' || $pagetitle == 'Nowe hasło') {
			echo '<div class="empty"></div>';
		} else {
			echo '<input type="button" class="back_button" value="" onClick="history.back();" style="border: none; color: #fff; padding: 0;"/>';
		}
	
	} else {
		echo '<a href="index.php" class="mb-2 back_button"></a>';
	}
	if ($pagetitle == 'Start') {
			echo '<div class="empty"></div>';
		} else {
			if ($pagetitle == 'Logowanie' || $pagetitle == 'Sukces') {
				echo '<div class="logo_nav logo_nav_big"><img src="'.$pageprefix.'img/logo_nav.svg" alt="logo"></div>';
			} else {
				echo '<div class="logo_nav"><img src="'.$pageprefix.'img/logo_nav.svg" alt="logo"></div>';
			}
		}
	
	if (isset($_SESSION['zalogowany'])) {
	echo '
	<div class="dropdown">
			<button class="dropbtn"><i class="far fa-user fa-2x text-white"></i></button>
			
			<div class="dropdown-content">
			<div class="dropdown_padding px-0">
						<a href="index.php">Start</a>
						<a href="moje_konto.php">Moje konto</a>
						<form class="wyloguj py-2 pb-3 pl-2" method="POST" action="'.$pageprefix.'index.php"><input type="submit" value="Wyloguj" class="text-primary"></form>
				</div>
			</div>
			
	</div>
	';
	} else {
	echo '<div class="empty"></div>';
	}
	?>
</div>