<?php
declare(strict_types=1);

use CorianderCore\Core\Http\Responses;
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};

return static fn(ServerRequestInterface $request): ResponseInterface => Responses::redirect('/en/home', 302);
