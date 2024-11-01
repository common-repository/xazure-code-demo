 <?
  error_reporting(E_ALL); 
//error_reporting(E_ALL & ~E_NOTICE | E_STRICT); // Warns on good coding standards
  ini_set("display_errors", "1");
?>
<?php the_post() ?>
<?php xacd_the_doctype() ?>
<html>
<head>
<?php xacd_the_head() ?>

<!-- These are not part of the demo. ;) -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php the_title() ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo plugins_url('/styles/xazure.codedemo.css', __FILE__); ?>">
<?php wp_print_scripts('jquery') ?>
<script type="text/javascript" src="<?php echo plugins_url('/scripts/xazure.codedemo.js', __FILE__); ?>"></script>
</head>

<body>
<?php xacd_the_body() ?>

<!-- This is not part of the demo either. ;) -->
<div class="codedemo">
	<a class="fleft" href="<?php bloginfo('url') ?>">Back to <?php bloginfo('name') ?></a>
	<input type="hidden" value="<?php echo htmlentities(xacd_get_the_head()) ?>" id="head_source">
	<input type="hidden" value="<?php echo htmlentities(xacd_get_the_body()) ?>" id="body_source">
	<input type="hidden" value="<?php echo htmlentities(xacd_get_the_doctype()) ?>" id="doctype_source">
</div>
</body>
</html>