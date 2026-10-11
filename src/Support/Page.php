<?php
declare(strict_types=1);

namespace App\Support;

use App\Modules\Localization\Localization;
use CorianderCore\Core\Http\Responses;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

final class Page
{
    public static function response(string $view, int $status = 200): ResponseInterface
    {
        // View names come from the application's route files, never the request.
        $metadata = require PROJECT_ROOT . '/src/Views/' . $view . '/metadata.php';
        return Responses::view($view . '/index', ['viewPath' => $view, 'page' => $metadata], $status);
    }

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
