<?php
declare(strict_types=1);

namespace App\Support;

use App\Modules\Localization\Localization;
use CorianderCore\Core\Http\Responses;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

final class Page
{
    public static function redirect(ServerRequestInterface $request, string $view): ResponseInterface
    {
        $locale = Localization::preferredLocale(
            $request->getHeaderLine('Accept-Language'),
            $request->getCookieParams()['portfolio_locale'] ?? null
        );

        return Responses::redirect(Localization::localizedPath($view, $locale), 302)
            ->withHeader('Vary', 'Accept-Language, Cookie');
    }
}
