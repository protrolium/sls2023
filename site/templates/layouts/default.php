<?= $rockfrontend->renderIf("sections/index-imgHover.latte", "name=artists|collaborators") ?>
<?= $rockfrontend->renderIf("sections/default-page.latte", "template=default-page") ?>
<?= $rockfrontend->renderIf("sections/studio.latte", "name=studio") ?>
<?= $rockfrontend->renderIf("sections/about.latte", "name=about") ?>
<?= $rockfrontend->renderIf("sections/recent.latte", "template=recent") ?>
<?= $rockfrontend->renderIf("sections/news-item.latte", "template=news-item") ?>
<?= $rockfrontend->renderIf("sections/projects.latte", "name=projects") ?>
<?= $rockfrontend->renderIf("sections/music-videos.latte", "template=music-videos") ?>
<?= $rockfrontend->renderIf("sections/concert-visuals.latte", "template=concert-visuals") ?>
<?= $rockfrontend->renderIf("sections/broadcast.latte", "template=broadcast") ?>
<?= $rockfrontend->renderIf("sections/virtual-reality.latte", "template=virtual-reality") ?>
<?= $rockfrontend->renderIf("sections/brands.latte", "template=brands") ?>
<?= $rockfrontend->renderIf("sections/cinema.latte", "template=cinema") ?>
<?= $rockfrontend->renderIf("sections/nft.latte", "template=nft") ?>
<?= $rockfrontend->renderIf("sections/includes/related-items.latte", "template=music-videos|concert-visuals|broadcast|virtual-reality|brands") ?>