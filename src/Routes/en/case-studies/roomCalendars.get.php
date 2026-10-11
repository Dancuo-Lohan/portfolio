<?php
declare(strict_types=1);

use App\Support\Page;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

return static fn(ServerRequestInterface $request): ResponseInterface => Page::response('en/case-studies/roomCalendars');
