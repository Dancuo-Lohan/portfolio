<?php
declare(strict_types=1);

return [
    'viewPath' => 'fr/my-work',
    'title' => 'Lohan Dancuo | Mes projets',
    'links' => [
        ['rel' => 'canonical', 'href' => 'https://lohan.dancuo.fr/fr/my-work'],
        ['rel' => 'alternate', 'hreflang' => 'en', 'href' => 'https://lohan.dancuo.fr/en/my-work'],
        ['rel' => 'alternate', 'hreflang' => 'fr', 'href' => 'https://lohan.dancuo.fr/fr/my-work'],
        ['rel' => 'alternate', 'hreflang' => 'x-default', 'href' => 'https://lohan.dancuo.fr/en/my-work'],
    ],
    'meta' => [
        ['name' => 'description', 'content' => 'Projets, études de cas, applications internes et composants réutilisables développés par Lohan Dancuo.'],
        ['property' => 'og:title', 'content' => 'Lohan Dancuo | Mes projets'],
        ['property' => 'og:description', 'content' => 'Projets, études de cas et composants autour des applications internes et des outils métier.'],
        ['property' => 'og:image', 'content' => '/assets/img/preview.png'],
        ['property' => 'og:image:alt', 'content' => 'Aperçu du portfolio.'],
        ['name' => 'twitter:card', 'content' => 'summary_large_image'],
        ['name' => 'twitter:title', 'content' => 'Lohan Dancuo | Mes projets'],
        ['name' => 'twitter:description', 'content' => 'Projets et études de cas orientés applications internes.'],
        ['name' => 'twitter:image', 'content' => '/assets/img/preview.png'],
        ['name' => 'twitter:image:alt', 'content' => 'Aperçu du portfolio.'],
    ],
];
