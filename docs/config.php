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
=======
>>>>>>> e2d89f7 (rebase 12/143)
=======
>>>>>>> 082eedb (rebase 12/143)
];
=======
];
>>>>>>> b4eb4c6 (.)
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
