<?php

use CorianderCore\Core\Support\PublicUrl;

$requestedView = isset($__corianderRequestedView) ? $__corianderRequestedView : 'home';
$activeMenu = isset($menu) ? (string) $menu : $requestedView;
$title = str_replace(['/', '-'], [' | ', ' '], $requestedView);
$title = trim($title) !== '' ? $title : 'portfolio';

$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$fullUrl = $host !== '' ? $scheme . '://' . $host . $uri : $uri;

$noIndexPages = [
    'page-not-found',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= PublicUrl::versionedAsset('assets/img/favicon.png') ?>">

    <?php if ($requestedView === 'home' && $uri !== '/') { ?>
        <link rel="canonical" href="https://lohan.dancuo.fr/">
    <?php } ?>

    <title>Lohan Dancuo | <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <?php if (in_array($requestedView, $noIndexPages, true)) { ?>
        <meta name="robots" content="noindex">
    <?php } ?>
    <meta name="description" content="Meet Lohan Dancuo, a green-minded French web developer with over <?= date('Y') - 2021 ?> years of experience. Specializing in optimizing native code for minimal environmental impact, I combine my passion for technology with sustainable practices to create innovative, efficient web solutions.">
    <meta name="keywords" content="Lohan Dancuo, Lohan, Dancuo, French web developer, green web development, sustainable coding, code optimization, web technology, innovative web solutions, carbon footprint reduction in coding, portfolio">

    <meta property="og:title" content="Lohan Dancuo | <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="Discover Lohan's journey as a French web developer dedicated to sustainable coding practices. Explore projects that showcase innovative solutions with minimal environmental impact.">
    <meta property="og:image" content="/assets/img/preview.png">
    <meta property="og:image:alt" content="Preview of the portfolio.">
    <meta property="og:url" content="<?= htmlspecialchars($fullUrl, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lohan Dancuo | <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="Meet Lohan, a French web developer blending a passion for technology with sustainability. Check out my projects focused on reducing the environmental impact of coding.">
    <meta name="twitter:image" content="/assets/img/preview.png">
    <meta name="twitter:image:alt" content="Preview of the portfolio.">

    <link rel="stylesheet" href="<?= PublicUrl::versionedAsset('assets/css/output.css') ?>">
</head>

<body id="<?= htmlspecialchars(str_replace('/', '-', $requestedView), ENT_QUOTES, 'UTF-8') ?>" class="bg-mint dark:bg-black w-full absolute min-h-full scrollbar text-black dark:text-white">

    <header class="md:w-full w-screen fixed md:sticky md:top-0 h-auto bottom-0 z-50 font-concert-one pointer-events-none flex md:flex-col flex-col-reverse">
        <div class="w-full md:text-2xl sm:text-xl text-lg md:border-b-2 md:border-t-0 border-t-2 border-dark-green dark:border-accent-green bg-white dark:bg-black">
            <nav class="md:max-w-screen-2xl w-full mx-auto relative flex justify-end md:h-16 h-14 pointer-events-auto">
                <div class="flex sm:tracking-1 md:justify-end justify-around w-full">
                    <div class="w-auto flex">
                        <a href="/home" title="Go to the Home Page" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'home' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>">Home</a>
                    </div>
                    <div class="w-auto flex">
                        <a href="/my-work" title="View My Work and Projects" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'my-work' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>">My work</a>
                    </div>
                    <div class="w-auto flex">
                        <a href="/contact-me" title="Get in Touch with Me" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'contact-me' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>">Contact me</a>
                    </div>
                    <div class="w-auto flex">
                        <button id="changeTheme" class="relative w-8 h-8 md:w-10 md:h-10 my-auto md:mr-12 m-auto" title="Change page theme">
                            <img src="/assets/img/moon.svg" height="44" width="44" class="hover:drop-shadow-black dark:hover:drop-shadow-white duration-300" alt="Logo representing current theme">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="main-content" class="relative w-full inset-x-0 mx-auto pb-16 mb-[222px] sm:mb-[254px] md:mb-[134px] font-poppins">
