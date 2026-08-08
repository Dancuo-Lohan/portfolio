<?php

use CorianderCore\Core\Router\ViewRenderer;
use Modules\Localization\Localization;
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
    $requestPath = trim((string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_PATH), '/');
    $locale = Localization::localeFromViewPath($requestPath)
        ?? Localization::preferredLocale(
            $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? null,
            $_COOKIE['portfolio_locale'] ?? null
        );

    ob_start();
    $renderView($locale . '/page-not-found')();
    return new Response(404, [], (string) ob_get_clean());
});

$redirectToLocalizedView = static function (string $view): callable {
    return static function () use ($view): Response {
        $locale = Localization::preferredLocale(
            $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? null,
            $_COOKIE['portfolio_locale'] ?? null
        );

        return new Response(302, ['Location' => Localization::localizedPath($view, $locale)]);
    };
};

$router->get('home', $redirectToLocalizedView('home'));
$router->get('en', static fn(): Response => new Response(302, ['Location' => '/en/home']));
$router->get('fr', static fn(): Response => new Response(302, ['Location' => '/fr/home']));
$router->get('my-work', $redirectToLocalizedView('my-work'));
$router->get('contact-me', $redirectToLocalizedView('contact-me'));
$router->get('legal-notice', $redirectToLocalizedView('legal-notice'));
$router->get('terms-and-conditions', $redirectToLocalizedView('terms-and-conditions'));
$router->get('page-not-found', $redirectToLocalizedView('page-not-found'));
$router->get('components/vertical-parallax', $redirectToLocalizedView('components/vertical-parallax'));
$router->get('case-studies/roomCalendars', $redirectToLocalizedView('case-studies/roomCalendars'));
$router->get('case-studies/corianderPHP', $redirectToLocalizedView('case-studies/corianderPHP'));

// Route for handling sitemap.xml requests
$router->get('sitemap.xml', function (ServerRequest $request) use ($notFound) {
    $sitemapPath = PROJECT_ROOT . '/public/sitemap.xml';
    if (!file_exists($sitemapPath)) {
        return $notFound();
    }

    return new Response(200, ['Content-Type' => 'application/xml; charset=utf-8'], (string) file_get_contents($sitemapPath));
});
