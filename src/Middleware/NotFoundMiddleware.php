<?php
declare(strict_types=1);

namespace App\Middleware;

use App\Modules\Localization\Localization;
use App\Support\Page;
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

        return Page::response($locale . '/page-not-found', 404);
    }
}
