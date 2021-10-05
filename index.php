<!doctype html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php echo the_title() ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header"><?php the_custom_header_markup() ?></header>
  <?php the_content() ?>
</body>
</html>
