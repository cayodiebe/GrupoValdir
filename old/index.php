<?php include 'includes/imports.php';// Brings the configuration files, connect to the database and security features ?>
<?php #include 'includes/emails.php';//Brings mail sending calls ?>
<!doctype html>
<html lang="pt-br">
	<head>
	<meta charset="UTF-8">
	<base href="<?=$base?>"/>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
	<title><?php include'includes/title.php';//Brings the title of each page?></title>
	<?php include 'includes/head.php'; //Brings content of <head>, which incnlui the css and js used in the project ?>
	<?php #include 'includes/seo.inc.php'; //Brings SEO tags ?>
	<?php #include 'includes/tema.php'; //Brings the CSS search table ?>
	</head>
	<body>
		<header>
			<?php include 'includes/header.php'; //Brings the header content ?>
		</header>
		<?php require_once("includes/pages.php");//Brings code that inserts each requested page in the url?>
		<footer>
			<?php include 'includes/footer.php'; //Brings footer content ?>
		</footer>
		<!-- All Js functions are created in this file -->
		<script src="assets/js/main.js"></script>
		<script>
			// $(window).load(function() {
	       		new WOW().init();
	       	// });
	    </script>
		<?php #include 'includes/temaFooter.php'; //Brings the lookup table Script?>
	</body>
</html>
