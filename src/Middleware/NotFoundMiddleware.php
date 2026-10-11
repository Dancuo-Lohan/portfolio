<?php
declare(strict_types=1);

namespace App\Middleware;

use App\Modules\Localization\Localization;
use CorianderCore\Core\Http\Responses;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};
use Psr\Http\Server\{MiddlewareInterface, RequestHandlerInterface};

final class NotFoundMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);
        if ($response->getStatusCode() !== 404) {
            return $response;
        }

        $locale = Localization::localeFromViewPath($request->getUri()->getPath())
            ?? Localization::preferredLocale(
                $request->getHeaderLine('Accept-Language'),
                $request->getCookieParams()['portfolio_locale'] ?? null
            );

        $page = Responses::view($locale . '/page-not-found/_notfound', status: 404);
        $response = $response->withBody($page->getBody())->withHeader('Content-Type', $page->getHeaderLine('Content-Type'));
        foreach (['Content-Length', 'Transfer-Encoding', 'Content-Encoding', 'Content-Range', 'ETag', 'Last-Modified'] as $header) {
            $response = $response->withoutHeader($header);
        }
        return $response;
    }
}
