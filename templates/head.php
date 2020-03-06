<?php

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="wpast/css/fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="wpast/css/material_icons/icons.css">
	<?php 
		if($semMaterialize == 'true'){
			?>
			<!--<link rel="stylesheet" type="text/css" href="wpast/materialize/materialize.min.css" /> -->
			<?php
		}else{
			?>
				<link rel="stylesheet" type="text/css" href="wpast/materialize/materialize.min.css" />
			<?php
		}
	?>
	
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="wpast/css/style.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />