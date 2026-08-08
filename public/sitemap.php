<?php
declare(strict_types=1);

$sitemapPath = PROJECT_ROOT . '/public/sitemap.xml';

header('Content-Type: application/xml; charset=utf-8');
readfile($sitemapPath);
