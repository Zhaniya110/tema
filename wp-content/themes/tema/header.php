<?php
/*
Файл хедера.

@package Tema
*/
?>
<!DOCTYPE html>
<html lang=" <?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
   
<?php add_action( 'wp_head', 'hook_css' );
function hook_css(){
	echo '<style>.wp_head_example{ background-color : #f1f1f1; } </style>';
}

## JS в head документа
add_action( 'wp_head','hook_javascript' );
function hook_javascript() {
	echo "<script> alert('Page is loading...'); </script>";
}
?>
</head>
<body>
    <header>Хедер</header>

