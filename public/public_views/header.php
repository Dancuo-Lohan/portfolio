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
<html lang="<?= htmlspecialchars($currentLocale, ENT_QUOTES, 'UTF-8') ?>">

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
    <script defer src="https://analytics.pronoesports.com/script.js" data-website-id="ec2dddd0-2c88-44e2-910d-18f88ceeb5fa"></script>
</head>

<body id="<?= htmlspecialchars(str_replace('/', '-', $requestedView), ENT_QUOTES, 'UTF-8') ?>" class="bg-mint dark:bg-black w-full absolute min-h-full scrollbar text-black dark:text-white">

    <header class="md:w-full w-screen fixed md:sticky md:top-0 h-auto bottom-0 z-50 font-concert-one pointer-events-none flex md:flex-col flex-col-reverse">
        <div class="w-full md:text-2xl sm:text-xl text-lg md:border-b-2 md:border-t-0 border-t-2 border-dark-green dark:border-accent-green bg-white dark:bg-black">
            <nav class="md:max-w-screen-2xl w-full mx-auto relative flex justify-end md:h-16 h-14 pointer-events-auto">
                <div class="flex sm:tracking-1 md:justify-end justify-around w-full">
                    <div class="w-auto flex">
                        <a href="<?= Localization::localizedPath('home', $currentLocale) ?>" title="<?= htmlspecialchars($labels['home'], ENT_QUOTES, 'UTF-8') ?>" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'home' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>"><?= htmlspecialchars($labels['home'], ENT_QUOTES, 'UTF-8') ?></a>
                    </div>
                    <div class="w-auto flex">
                        <a href="<?= Localization::localizedPath('my-work', $currentLocale) ?>" title="<?= htmlspecialchars($labels['work'], ENT_QUOTES, 'UTF-8') ?>" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'my-work' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>"><?= htmlspecialchars($labels['work'], ENT_QUOTES, 'UTF-8') ?></a>
                    </div>
                    <div class="w-auto flex">
                        <a href="<?= Localization::localizedPath('contact-me', $currentLocale) ?>" title="<?= htmlspecialchars($labels['contact'], ENT_QUOTES, 'UTF-8') ?>" class="relative md:mr-12 block m-auto after:absolute after:content-[''] after:-bottom-[2px] md:after:-bottom-1 after:h-[2px] md:after:h-[3px] after:inset-x-0 after:mx-auto after:bg-dark-green dark:after:bg-accent-green <?= $activeMenu === 'contact-me' ? "after:w-full" : "after:w-0 hover:after:w-full after:transition-['width']" ?>"><?= htmlspecialchars($labels['contact'], ENT_QUOTES, 'UTF-8') ?></a>
                    </div>
                    <div class="w-auto flex">
                        <a href="<?= htmlspecialchars($languageUrls[$targetLocale], ENT_QUOTES, 'UTF-8') ?>" hreflang="<?= htmlspecialchars($targetLocale, ENT_QUOTES, 'UTF-8') ?>" data-language-switch class="group md:mr-12 m-auto inline-flex items-center rounded-md border border-dark-green/30 bg-mint p-0.5 text-xs font-semibold uppercase tracking-1 text-dark-green transition-colors hover:border-dark-green/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark-green dark:border-accent-green/40 dark:bg-black dark:text-accent-green dark:hover:border-accent-green/70 dark:focus-visible:outline-accent-green sm:text-sm" aria-label="<?= htmlspecialchars($languageSwitchLabel, ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($languageSwitchLabel, ENT_QUOTES, 'UTF-8') ?>">
                            <?php foreach (['fr', 'en'] as $locale) { ?>
                                <?php if ($locale === $currentLocale) { ?>
                                    <span class="rounded bg-dark-green px-2 py-1 text-white dark:bg-accent-green dark:text-black" aria-current="true"><?= htmlspecialchars($locale, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php } else { ?>
                                    <span class="rounded px-2 py-1 transition-colors group-hover:bg-dark-green/10 dark:group-hover:bg-accent-green/10"><?= htmlspecialchars($locale, ENT_QUOTES, 'UTF-8') ?></span>
                                <?php } ?>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="w-auto flex">
                        <button id="changeTheme" class="relative w-8 h-8 md:w-10 md:h-10 my-auto md:mr-12 m-auto" title="<?= htmlspecialchars($labels['theme'], ENT_QUOTES, 'UTF-8') ?>">
                            <img src="<?= PublicUrl::versionedAsset('assets/img/moon.svg') ?>" height="44" width="44" class="hover:drop-shadow-black dark:hover:drop-shadow-white duration-300" alt="<?= htmlspecialchars($labels['theme'], ENT_QUOTES, 'UTF-8') ?>">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="main-content" class="relative w-full inset-x-0 mx-auto pb-16 mb-[222px] sm:mb-[254px] md:mb-[134px] font-poppins">
