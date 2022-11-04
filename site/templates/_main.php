<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
/** @var RockFrontend $rockfrontend */

$home = $pages->get('/'); // homepage
$rockfrontend
	->styles()->setOptions(['autoload'=>true])
	// ->add("/site/templates/uikit-3.15.10/src/less/uikit.theme.less")
	->add("/site/templates/styles/custom.less")
	;
$rockfrontend
	->scripts()
	->add("/site/templates/uikit-3.15.10/dist/js/uikit.min.js")
	->add("/site/templates/uikit-3.15.10/dist/js/uikit-icons.min.js")
	->add("/site/templates/scripts/main.js")
	;
?>
<!DOCTYPE html>
<html lang="en">
	<head id="html-head">

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>

		<!-- favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->assets?>favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->assets?>favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->assets?>favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $config->urls->assets?>favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo $config->urls->assets?>favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

	</head>
	<body id="html-body">
		<!-- make sure we are in dark mode -->
		<script type="text/javascript">
			const selectedTheme = localStorage.getItem('dark-mode');
			if (selectedTheme === "enabled") {
				html.dataset.theme = `theme-dark`;
			};
		</script>

		<?= $rockfrontend->render("sections/includes/header.latte") ?>
		<?= $rockfrontend->renderLayout($page) ?>
		<?= $rockfrontend->render("sections/includes/footer.latte") ?>

		<!-- <script>
			
		</script> -->
	</body>
</html>