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
	;
?>
<!DOCTYPE html>
<html lang="en">
	<head id="html-head">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
	</head>
	<body id="html-body">
		<?= $rockfrontend->renderLayout($page) ?>
	</body>
</html>
