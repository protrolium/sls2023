<?= $rockfrontend->renderIf("sections/main.latte", "template=default-page") ?>
<?= $rockfrontend->renderIf("sections/activities.latte", "template=activities") ?>
<!-- <?= $rockfrontend->renderIf("sections/index.latte", "parent=projects") ?> -->
<?= $rockfrontend->renderIf("sections/music-videos.latte", "template=music-videos") ?>
<?= $rockfrontend->renderIf("sections/about.latte", "name=about") ?>