<?php

use CorianderCore\Core\Router\ViewRenderer;
use Nyholm\Psr7\Response;
use Nyholm\Psr7\ServerRequest;

/** @var \CorianderCore\Core\Router\Router $router */
/** @var callable $notFound */

// Register custom routes here. This file is included by index.php and
// has access to the `$router` and `$notFound` variables.
//
// Small projects can keep all custom routes in this file. Larger projects can
// split routes into src/Routes/*.php and include them here:
// $adminRoutes = PROJECT_ROOT . '/src/Routes/admin.php';
// if (is_file($adminRoutes)) {
//     (require $adminRoutes)($router);
// }

// Example dynamic route: /user/42 -> "User ID: 42"
// $router->get('user/{id}', function (ServerRequest $request) {
//     echo 'User ID: ' . $request->getAttribute('id');
// });

$renderView = static function (string $view, array $data = []): callable {
    return static function () use ($view, $data): void {
        (new ViewRenderer())->render($view, $data);
    };
};

$router->setNotFound(static function () use ($renderView): Response {
    ob_start();
    $renderView('page-not-found')();
    return new Response(404, [], (string) ob_get_clean());
});

// Route for handling sitemap.xml requests
$router->get('sitemap.xml', function (ServerRequest $request) use ($notFound) {
    $sitemapPath = PROJECT_ROOT . '/public/sitemap.xml';
    if (!file_exists($sitemapPath)) {
        return $notFound();
    }

    return new Response(200, ['Content-Type' => 'application/xml; charset=utf-8'], (string) file_get_contents($sitemapPath));
});
