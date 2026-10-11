<?php
declare(strict_types=1);

use App\Middleware\NotFoundMiddleware;
use CorianderCore\Core\Security\{ApiRequestLimitsMiddleware, CsrfMiddleware, SecurityHeadersMiddleware};

return [
    new SecurityHeadersMiddleware([
        'Content-Security-Policy' => implode('; ', [
            "default-src 'self'",
            "script-src 'self' https://unpkg.com https://analytics.corianderphp.com",
            "connect-src 'self' https://api.websitecarbon.com https://analytics.corianderphp.com",
            "style-src 'self' 'unsafe-inline'",
            "base-uri 'self'",
            "frame-ancestors 'none'",
            "object-src 'none'",
        ]),
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'DENY',
        'Referrer-Policy' => 'strict-origin-when-cross-origin',
        'Permissions-Policy' => 'geolocation=(), microphone=(), camera=()',
        'Cross-Origin-Opener-Policy' => 'same-origin',
        'Cross-Origin-Resource-Policy' => 'same-origin',
    ]),
    new ApiRequestLimitsMiddleware(API_MAX_BODY_BYTES, API_TIMEOUT_SECONDS, apiPrefixes: []),
    new CsrfMiddleware(),
    new NotFoundMiddleware(),
];
