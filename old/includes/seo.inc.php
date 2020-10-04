<?php
    
	$DB_row = $banco->getSeo(); 

	if( isset($DB_row['id']) ):
		
?>
		<!-- TWITTER -->
		<meta name="twitter:card" content="<?php echo $DB_row['descricao_site']; ?>">
		<meta name="twitter:title" content="<?php echo $DB_row['titulo_site']; ?>">
		<meta name="twitter:description" content="<?php echo $DB_row['descricao_site']; ?>">
		<meta name="twitter:creator" content="Mauricio Silva">
		<meta name="twitter:image" content="assets/images/<?php echo $DB_row['imagem_facebook']; ?>">
		 
		<!-- FACEBOOK -->
		<meta property="og:title" content="<?php echo $DB_row['titulo_site']; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')+1); ?>" />
		<meta property="og:image" content="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')+1); ?>assets/images/<?php echo $DB_row['imagem_facebook']; ?>" />
		<meta property="og:description" content="<?php echo $DB_row['descricao_site']; ?>" />
		<meta property="og:site_name" content="<?php echo $DB_row['titulo_site']; ?>" />
		<meta name="description" content="<?php echo $DB_row['descricao_site']; ?>" />
		 
		<!-- GOOGLE+ -->
		<meta itemprop="name" content="<?php echo $DB_row['titulo_site']; ?>">
		<meta itemprop="description" content="<?php echo $DB_row['descricao_site']; ?>">
		<meta itemprop="image" content="assets/images/<?php echo $DB_row['imagem_facebook']; ?>">

		<!-- GERAL -->
		<meta id="MetaDescription" name="DESCRIPTION" content="<?php echo $DB_row['descricao_site']; ?>">
		<meta id="MetaKeywords" name="KEYWORDS" content="<?php echo $DB_row['keywords']; ?>">
		<meta id="MetaAuthor" name="AUTHOR" content="Mauricio Silva">
		<meta name="Robots" content="ALL">
		<meta name="Robots" content="INDEX,FOLLOW">
		<meta name="Revisit-After" content="2 Days">
		<meta name="Distribution" content="Global">
		<meta name="Rating" content="General">

<?php 
	endif;
?>