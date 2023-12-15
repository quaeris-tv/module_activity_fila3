<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Docs Starter Template',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once ('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : $page->baseUrl.'/'.trimPath($path);
    },
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2d89f7 (rebase 12/143)
=======
>>>>>>> 082eedb (rebase 12/143)
=======
>>>>>>> 4993600 (rebase 12/143)
=======
>>>>>>> e963668 (rebase 12/143)
=======
>>>>>>> 0730a6f (rebase 12/143)
=======
>>>>>>> 0a11d1d (rebase 12/143)
=======
>>>>>>> 8819e44 (rebase 12/143)
=======
>>>>>>> 4a58e55 (rebase 12/143)
=======
>>>>>>> d3e4566 (rebase 12/143)
=======
>>>>>>> a6c44d8 (rebase 12/143)
=======
>>>>>>> 436b745 (rebase 12/143)
=======
>>>>>>> 398a969 (rebase 12/143)
=======
>>>>>>> 32fc94f (rebase 12/143)
=======
>>>>>>> 299057d (rebase 12/143)
=======
>>>>>>> 5acf726 (rebase 12/143)
=======
>>>>>>> 09d48e9 (rebase 12/143)
=======
>>>>>>> e2d7ce4 (rebase 12/143)
=======
>>>>>>> f693352 (rebase 12/143)
=======
>>>>>>> 2f77a7b (rebase 12/143)
=======
>>>>>>> 61b3005 (rebase 12/143)
];
=======
];
>>>>>>> b4eb4c6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
];
>>>>>>> e1c77f7 (Lint)
=======
>>>>>>> e2d89f7 (rebase 12/143)
=======
];
>>>>>>> c3754c3 (rebase 13/143)
=======
];
>>>>>>> 8fd996a (Dusting)
=======
>>>>>>> 082eedb (rebase 12/143)
=======
];
>>>>>>> b8c7c89 (rebase 13/143)
=======
];
>>>>>>> abbb872 (Dusting)
=======
>>>>>>> 4993600 (rebase 12/143)
=======
];
>>>>>>> d765049 (rebase 13/143)
=======
];
>>>>>>> 00c926b (Dusting)
=======
>>>>>>> e963668 (rebase 12/143)
=======
];
>>>>>>> 1cabb32 (rebase 13/143)
=======
];
>>>>>>> 9debb00 (Dusting)
=======
>>>>>>> 0730a6f (rebase 12/143)
=======
];
>>>>>>> 3e82161 (rebase 13/143)
=======
];
>>>>>>> 17da9b0 (Dusting)
=======
>>>>>>> 0a11d1d (rebase 12/143)
=======
];
>>>>>>> 70283f1 (rebase 13/143)
=======
];
>>>>>>> da0cf65 (Dusting)
=======
>>>>>>> 8819e44 (rebase 12/143)
=======
];
>>>>>>> 381eb6c (rebase 13/143)
=======
];
>>>>>>> 2573e94 (Dusting)
=======
>>>>>>> 4a58e55 (rebase 12/143)
=======
];
>>>>>>> ff13d39 (rebase 13/143)
=======
];
>>>>>>> 865bbb6 (Dusting)
=======
>>>>>>> d3e4566 (rebase 12/143)
=======
];
>>>>>>> 946a615 (rebase 13/143)
=======
];
>>>>>>> 8e8959e (Dusting)
=======
>>>>>>> a6c44d8 (rebase 12/143)
=======
];
>>>>>>> e667de7 (rebase 13/143)
=======
];
>>>>>>> 08a3afe (Dusting)
=======
>>>>>>> 436b745 (rebase 12/143)
=======
];
>>>>>>> 367fa9b (rebase 13/143)
=======
];
>>>>>>> 53bd727 (Dusting)
=======
>>>>>>> 398a969 (rebase 12/143)
=======
];
>>>>>>> d34e5d9 (rebase 13/143)
=======
];
>>>>>>> 0181774 (Dusting)
=======
>>>>>>> 32fc94f (rebase 12/143)
=======
];
>>>>>>> 08eb9f4 (rebase 13/143)
=======
];
>>>>>>> d37d627 (Dusting)
=======
>>>>>>> 299057d (rebase 12/143)
=======
];
>>>>>>> 9e2368e (rebase 13/143)
=======
];
>>>>>>> aa9c1eb (Dusting)
=======
>>>>>>> 5acf726 (rebase 12/143)
=======
];
>>>>>>> 25badc0 (rebase 13/143)
=======
];
>>>>>>> a568874 (Dusting)
=======
>>>>>>> 09d48e9 (rebase 12/143)
=======
];
>>>>>>> 8301620 (rebase 13/143)
=======
];
>>>>>>> 874cad1 (Dusting)
=======
>>>>>>> e2d7ce4 (rebase 12/143)
=======
];
>>>>>>> 82f3786 (rebase 13/143)
=======
];
>>>>>>> afac65a (Dusting)
=======
>>>>>>> f693352 (rebase 12/143)
=======
];
>>>>>>> 9af4cc7 (rebase 13/143)
=======
];
>>>>>>> d15cce9 (Dusting)
=======
>>>>>>> 2f77a7b (rebase 12/143)
=======
];
>>>>>>> 52889c8 (rebase 13/143)
=======
];
>>>>>>> 4aebfd9 (Dusting)
=======
>>>>>>> 61b3005 (rebase 12/143)
=======
];
>>>>>>> 7445bde (rebase 13/143)
=======
];
>>>>>>> f709bc8 (Dusting)
