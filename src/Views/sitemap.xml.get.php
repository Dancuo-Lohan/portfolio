<?php
declare(strict_types=1);

use Nyholm\Psr7\Response;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

return static function (ServerRequestInterface $request): ResponseInterface {
    $file = PROJECT_ROOT . '/public/sitemap.xml';
    return is_file($file)
        ? new Response(200, ['Content-Type' => 'application/xml; charset=utf-8'], (string) file_get_contents($file))
        : new Response(404);
};
