<?php
	if(isset($_GET['page'])) {
		$page = stripslashes($_GET['page']);
	} else {
		$page = 'about';
	}
	if ($page == 'about') {
		require "./includes/intro.php";
	}else{
		require "./includes/header.php";
	}
	require "./$page.php";
	require "./includes/footer.php";
?>
