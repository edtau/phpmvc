<?php


require __DIR__.'/config_with_app.php';

//To get clean url. Notice it must be before navbar to work as expected
$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

// Create services and inject into the app.
$di  = new \Anax\DI\CDIFactoryDefault();

$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);

    return $controller;
});

$app = new \Anax\Kernel\CAnax($di);



$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

//function to add byline
function byline($app){
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    return $byline;
}


// comment route
$app->router->add('comment', function() use ($app) {
    $app->theme->addStylesheet('css/comment.css');
    $app->theme->setTitle("Welcome to Anax Guestbook");
    $app->views->add('comment/index');
    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
        'key'    => "key1",
    ]);
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['key1'],

    ]);


});
// comment2 route
$app->router->add('comment2', function() use ($app) {
    $app->theme->addStylesheet('css/comment.css');
    $app->theme->setTitle("Welcome to Anax Guestbook");
    $app->views->add('comment/index');
    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
        'key'    => "key2",
    ]);
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['key2'],


    ]);


});


//Route me (empty start page)
$app->router->add('', function() use ($app) {
    $app->theme->setTitle("Me");

    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = byline($app);

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
});

//Router me
$app->router->add('me', function() use ($app) {
    $app->theme->setTitle("Me");

    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = byline($app);

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,

    ]);

});

//Route Redovisning
$app->router->add('redovisning', function() use ($app) {

    $app->theme->setTitle("Redovisning");

    $content = $app->fileContent->get('redovisning.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = byline($app);

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);

});
//Router Source
$app->router->add('source', function() use ($app) {

    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");

    $source = new \Mos\Source\CSource([
        'secure_dir' => '..',
        'base_dir' => '..',
        'add_ignore' => ['.htaccess'],
    ]);

    $app->views->add('me/source', [
        'content' => $source->View(),
    ]);

});

// Route to show welcome to dice
$app->router->add('dice', function() use ($app) {

    $app->theme->addStylesheet('css/dice.css');

    $app->views->add('dice/index');
    $app->theme->setTitle("Kasta tärning");

});

// Route to roll dice and show results
$app->router->add('dice/roll', function() use ($app) {

    $app->theme->addStylesheet('css/dice.css');

    // Check how many rolls to do
    $roll = $app->request->getGet('roll', 1);
    $app->validate->check($roll, ['int', 'range' => [1, 100]])
    or die("Felaktigt värde!");

    // Make roll and prepare reply
    $dice = new \Mos\Dice\CDice();
    $dice->roll($roll);

    $app->views->add('dice/index', [
        'roll'      => $dice->getNumOfRolls(),
        'results'   => $dice->getResults(),
        'total'     => $dice->getTotal(),
    ]);

    $app->theme->setTitle("Tärningen kastad");

});


$app->router->handle();
$app->theme->render();