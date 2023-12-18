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
