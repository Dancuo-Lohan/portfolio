<?php
declare(strict_types=1);

return [
    'viewPath' => 'fr/home',
    'title' => 'Lohan Dancuo | Développeur fullstack',
    'links' => [
        ['rel' => 'canonical', 'href' => 'https://lohan.dancuo.fr/fr/home'],
        ['rel' => 'alternate', 'hreflang' => 'en', 'href' => 'https://lohan.dancuo.fr/en/home'],
        ['rel' => 'alternate', 'hreflang' => 'fr', 'href' => 'https://lohan.dancuo.fr/fr/home'],
        ['rel' => 'alternate', 'hreflang' => 'x-default', 'href' => 'https://lohan.dancuo.fr/en/home'],
    ],
    'meta' => [
        ['name' => 'description', 'content' => 'Lohan Dancuo, développeur fullstack. Parcours professionnel, projets PHP et TypeScript, applications métier et outils internes conçus avec leurs utilisateurs.'],
        ['property' => 'og:title', 'content' => 'Lohan Dancuo | Développeur fullstack'],
        ['property' => 'og:description', 'content' => 'Mon parcours, mes projets et ma façon de développer des applications métier avec leurs utilisateurs.'],
        ['property' => 'og:image', 'content' => '/assets/img/preview.png'],
        ['property' => 'og:image:alt', 'content' => 'Aperçu du portfolio.'],
        ['name' => 'twitter:card', 'content' => 'summary_large_image'],
        ['name' => 'twitter:title', 'content' => 'Lohan Dancuo | Développeur fullstack'],
        ['name' => 'twitter:description', 'content' => 'Applications internes, outils métier et développement web fullstack.'],
        ['name' => 'twitter:image', 'content' => '/assets/img/preview.png'],
        ['name' => 'twitter:image:alt', 'content' => 'Aperçu du portfolio.'],
    ],
];
