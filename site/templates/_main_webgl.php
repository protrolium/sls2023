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

$home = $pages->get('/'); // homepage directory
$rockfrontend->styles()
	->add("/site/templates/uikit/src/less/uikit.theme.less")
	->add("/site/templates/styles/custom.less")
	->addDefaultFolders()
	;
$rockfrontend
	->scripts()
	->add("/site/templates/uikit/dist/js/uikit.min.js") // remove , "defer" to prevent FOUC
	->add("/site/templates/uikit/dist/js/uikit-icons.min.js", "defer")
	->add("/site/templates/scripts/main.js")
	;

?>
<!DOCTYPE html>
<html lang="<?php echo $user->language->languagecode; ?>">
	<head id="html-head">
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-2N6CFM6P3B"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-2N6CFM6P3B');
		</script>
		
		<!-- hide our site content -->
		<style>html{visibility: hidden;opacity:0;}body.preload * {transition: none !important;animation: none !important;}body.preload .page-content {opacity: 0;visibility: hidden;}</style>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<!-- make sure we get styling on mobile by setting meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Strangeloop Studios · <?php echo $page->title; ?></title>
		<meta name="description" content="Strangeloop Studios is a visual content production company, focused on working with creatives to explore new media and audience experiences. Our team is composed of animators, designers, producers, writers, musicians, and developers.">
		<meta name="keywords" content="Visuals, Concert Visuals, Animation, 3D Animator, Notch, C4D, Motion Graphics, Design, Creative Studio, Music, Music Visuals, Musicians, Tour, Projection, Video Projection, Projection Mapping, 3D, Virtual Reality, VR, VJ, Visualist, Video Design, Programmer, Fractals, Hyper, Production Company, Los Angeles, Flying Lotus, The Weeknd, Kendrick Lamar, Zeds Dead, Erykah Badu, Lil Nas X">
		<meta name="generator" content="ProcessWire">

		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?&family=Oswald:wght@200;300;400;500;600;700&family=Silkscreen&display=swap" rel="stylesheet"> 

		<!-- favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->assets?>favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->assets?>favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->assets?>favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $config->urls->assets?>favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo $config->urls->assets?>favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<!-- metatags -->
		<?php $metadata = $modules->get('MarkupMetadata');?>
		<?php echo $metadata->render();?>

		<!-- threejs code -->
    	<script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
		
		<!-- make the lv-2 object accessible in lvtk-webgl.js -->
		<script>
			const extrasUrl = "<?php echo $config->urls->templates?>scripts/extras/";
		</script>

		<!-- importmaps -->
		<script type="importmap">
			{
				"imports": {
					"three": "<?php echo $config->urls->templates?>scripts/build/three.module.js",
					"three/addons/": "<?php echo $config->urls->templates?>scripts/jsm/"
				}
			}
		</script>

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

		<!-- show our site content -->
		<!-- <style>html{visibility: visible;opacity:1;}</style> -->

		<!-- unhide the site content set via inline css above -->
		<script type="text/javascript">window.addEventListener('load', function () {document.body.classList.remove('preload');});</script>

		<!-- scripts for once DOM is loaded -->
		<script type="text/javascript" src="<?php echo $config->urls->templates?>scripts/onload.js" defer></script>
	</body>
</html>