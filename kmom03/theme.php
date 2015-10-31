<?php
require __DIR__.'/config_with_app.php';


$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar-theme.php');

if (isset($_GET['show-grid'])) {
    $app->theme->addStylesheet('css/anax-grid/grid.css');
}


$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Tema");


    ##Flash
    $flash = $app->fileContent->get('theme/flash.html');
    $app->views->add('theme/empty', [ 'content' => $flash, 'class' => 'flash'], 'flash');

    ##Main
    $main = $app->fileContent->get('theme/main.html');
    $app->views->add('theme/main', [ 'content' => $main, 'class' => 'main'], 'main');

    ##Sidebar
    $sidebar = $app->fileContent->get('theme/sidebar.html');
    $app->views->add('theme/empty', [ 'content' => $sidebar], 'sidebar');

    ##Featured
    $featured1 = $app->fileContent->get('theme/featured-1.html');
    $featured2 = $app->fileContent->get('theme/featured-2.html');
    $featured3 = $app->fileContent->get('theme/featured-3.html');

    ##Triptych
    $triptych1 = $app->fileContent->get('theme/triptych-1.html');
    $triptych2 = $app->fileContent->get('theme/triptych-2.html');
    $triptych3 = $app->fileContent->get('theme/triptych-3.html');

    $app->views->add('theme/empty', [ 'content' => $featured1], 'featured-1');
    $app->views->add('theme/empty', [ 'content' => $featured2], 'featured-2');
    $app->views->add('theme/empty', [ 'content' => $featured3], 'featured-3');

    ##Triptych
    $app->views->add('theme/empty', [ 'content' => $triptych1], 'triptych-1');
    $app->views->add('theme/empty', [ 'content' => $triptych2], 'triptych-2');
    $app->views->add('theme/empty', [ 'content' => $triptych3], 'triptych-3');


});
$app->router->add('regioner', function() use ($app) {

    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
    $app->theme->setTitle("Regioner");

    $app->views->addString('flash', 'flash')
        ->addString('featured-1', 'featured-1')
        ->addString('featured-2', 'featured-2')
        ->addString('featured-3', 'featured-3')
        ->addString('main', 'main')
        ->addString('sidebar', 'sidebar')
        ->addString('triptych-1', 'triptych-1')
        ->addString('triptych-2', 'triptych-2')
        ->addString('triptych-3', 'triptych-3')
        ->addString('footer-col-1', 'footer-col-1')
        ->addString('footer-col-2', 'footer-col-2')
        ->addString('footer-col-3', 'footer-col-3')
        ->addString('footer-col-4', 'footer-col-4');

});
$app->router->add('grid', function() use ($app) {

    $app->theme->addStylesheet('css/anax-grid/grid.css');
    $app->theme->setTitle("Visa rutnät");

    $content = $app->fileContent->get('theme/theme.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $app->views->add('me/page', [
        'content' => $content,
    ]);

});


$app->router->add('regioner', function() use ($app) {
      $app->theme->addStylesheet('css/anax-grid/grid_demo.css');

    $app->theme->setTitle("Regioner");

    $app->views->addString('flash', 'flash')
               ->addString('featured-1', 'featured-1')
               ->addString('featured-2', 'featured-2')
               ->addString('featured-3', 'featured-3')
               ->addString('main', 'main')
               ->addString('sidebar', 'sidebar')
               ->addString('triptych-1', 'triptych-1')
               ->addString('triptych-2', 'triptych-2')
               ->addString('triptych-3', 'triptych-3')
               ->addString('footer-col-1', 'footer-col-1')
               ->addString('footer-col-2', 'footer-col-2')
               ->addString('footer-col-3', 'footer-col-3')
               ->addString('footer-col-4', 'footer-col-4');

});
$app->router->add('typografi', function() use ($app) {

    $app->theme->setTitle("Typografi");

    $content = $app->fileContent->get('theme/typography.html');

    $app->views->add('me/page', ['content' => $content]);
    $app->views->add('me/page', ['content' => $content], 'sidebar');

});



$app->router->add('font-awesome', function() use ($app) {

    $app->theme->setTitle("Använd Font Awesome");

    $content = $app->fileContent->get('theme/fontawsome.html');
    $app->views->add('me/page', ['content' => $content]);

    $content = $app->fileContent->get('theme/fontawsome2.html');
    $app->views->add('me/page', ['content' => $content], 'sidebar');

});
$app->router->handle();
$app->theme->render();
