<?php
	include("seguranca.php");
	session_destroy();
	echo '<script>window.location.href = "login.php";</script>'
?>