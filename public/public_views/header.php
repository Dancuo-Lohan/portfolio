<?php

use CorianderCore\Core\Support\PublicUrl;
use Modules\Localization\Localization;

$requestedView = isset($__corianderRequestedView) ? $__corianderRequestedView : 'en/home';
$currentLocale = Localization::localeFromViewPath($requestedView) ?? Localization::DEFAULT_LOCALE;
$currentView = Localization::stripLocale($requestedView);
$activeMenu = isset($menu) ? (string) $menu : Localization::activeMenu($requestedView);
$labels = Localization::labels($currentLocale);
$languageUrls = [
    'fr' => Localization::switchPath($requestedView, 'fr'),
    'en' => Localization::switchPath($requestedView, 'en'),
];
$targetLocale = $currentLocale === 'fr' ? 'en' : 'fr';
$languageSwitchLabel = $currentLocale === 'fr' ? 'Passer en anglais' : 'Switch to French';

if (!headers_sent()) {
    setcookie('portfolio_locale', $currentLocale, [
        'expires' => time() + 60 * 60 * 24 * 365,
        'path' => '/',
        'samesite' => 'Lax',
    ]);
}

$metaDataPath = PROJECT_ROOT . '/public/public_views/' . $requestedView . '/metadata.php';
if (file_exists($metaDataPath)) {
    require_once $metaDataPath;
}
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($currentLocale, ENT_QUOTES, 'UTF-8') ?>" class="motion-reduce:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= PublicUrl::versionedAsset('assets/img/favicon.png') ?>">

    <?php
    if (isset($metadata)) {
        echo $metadata;
        echo PHP_EOL;
    } else {
        echo '<title>No configured title</title>';
        echo '<meta name="description" content="No configured description.">';
    }
    ?>
    <link rel="stylesheet" href="<?= PublicUrl::versionedAsset('assets/css/output.css') ?>">
    <script defer src="https://analytics.corianderphp.com/script.js" data-website-id="ec2dddd0-2c88-44e2-910d-18f88ceeb5fa" data-exclude-search="true" data-exclude-hash="true" data-do-not-track="true"></script>
</head>

<body id="<?= htmlspecialchars(str_replace('/', '-', $requestedView), ENT_QUOTES, 'UTF-8') ?>" class="bg-mint dark:bg-black w-full absolute min-h-full scrollbar text-black dark:text-white">

    <a href="#main-content" class="fixed left-3 top-3 z-[60] -translate-y-24 rounded-md bg-dark-green px-4 py-3 font-poppins text-sm font-semibold text-white focus:translate-y-0 dark:bg-accent-green dark:text-black"><?= $currentLocale === 'fr' ? 'Aller au contenu' : 'Skip to content' ?></a>
    <header class="fixed bottom-0 z-50 w-full font-concert-one md:sticky md:top-0 md:bottom-auto">
        <div class="border-t-2 border-dark-green bg-white dark:border-accent-green dark:bg-black md:border-b md:border-t-0">
            <nav class="mx-auto flex h-16 w-full max-w-6xl items-center gap-1 px-2 sm:gap-3 sm:px-5 md:gap-6 md:px-8 lg:px-10" aria-label="<?= $currentLocale === 'fr' ? 'Navigation principale' : 'Main navigation' ?>">
                <a href="<?= Localization::localizedPath('home', $currentLocale) ?>" class="mr-auto hidden min-h-11 items-center text-xl text-dark-green focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green md:inline-flex">Lohan Dancuo<span class="text-black dark:text-white">.</span></a>
                <div class="flex min-w-0 flex-1 items-center justify-around gap-1 md:flex-none md:gap-6">
                    <?php foreach (['home' => 'home', 'my-work' => 'work', 'contact-me' => 'contact'] as $view => $label) { ?>
                        <a href="<?= Localization::localizedPath($view, $currentLocale) ?>" class="relative inline-flex min-h-11 items-center whitespace-nowrap px-1 text-sm text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 dark:text-white sm:text-base md:text-lg after:absolute after:bottom-1 after:inset-x-1 after:h-0.5 after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === $view ? 'after:block' : 'after:hidden hover:after:block' ?>" <?= $currentView === $view ? 'aria-current="page"' : '' ?>>
                            <span class="md:hidden"><?= htmlspecialchars($label === 'work' ? ($currentLocale === 'fr' ? 'Projets' : 'Projects') : ($label === 'contact' ? 'Contact' : $labels[$label]), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="hidden md:inline"><?= htmlspecialchars($labels[$label], ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    <?php } ?>
                </div>
                <a href="<?= htmlspecialchars($languageUrls[$targetLocale], ENT_QUOTES, 'UTF-8') ?>" hreflang="<?= htmlspecialchars($targetLocale, ENT_QUOTES, 'UTF-8') ?>" data-language-switch class="group inline-flex min-h-11 shrink-0 items-center rounded-md border border-dark-green/25 bg-mint p-0.5 font-poppins text-xs font-semibold uppercase text-dark-green transition-colors hover:border-dark-green/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 dark:border-accent-green/30 dark:bg-black dark:text-accent-green dark:hover:border-accent-green/70 sm:text-sm" aria-label="<?= htmlspecialchars($languageSwitchLabel, ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($languageSwitchLabel, ENT_QUOTES, 'UTF-8') ?>">
                    <?php foreach (['fr', 'en'] as $locale) { ?>
                        <span class="rounded px-1.5 py-2 sm:px-2 <?= $locale === $currentLocale ? 'bg-dark-green text-white dark:bg-accent-green dark:text-black' : 'transition-colors group-hover:bg-dark-green/10 dark:group-hover:bg-accent-green/10' ?>" <?= $locale === $currentLocale ? 'aria-current="true"' : '' ?>><?= htmlspecialchars($locale, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php } ?>
                </a>
                <button id="changeTheme" class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-md transition-colors hover:bg-dark-green/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 dark:hover:bg-accent-green/10" aria-label="<?= htmlspecialchars($labels['theme'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($labels['theme'], ENT_QUOTES, 'UTF-8') ?>">
                    <img src="<?= PublicUrl::versionedAsset('assets/img/moon.svg') ?>" height="28" width="28" class="h-7 w-7" alt="">
                </button>
            </nav>
        </div>
    </header>

    <main id="main-content" tabindex="-1" class="relative w-full inset-x-0 mx-auto pb-16 mb-[222px] sm:mb-[254px] md:mb-[134px] font-poppins focus:outline-none">
