<?= $rockfrontend->render("sections/main.latte") ?>
<?= $rockfrontend->renderIf("sections/hero.latte", "template=home") ?>
<?= $rockfrontend->render("sections/footer.latte") ?>