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
<<<<<<< HEAD
    'navigation' => require_once ('navigation.php'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'navigation' => require_once ('navigation.php'),
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 285fa96 (.)
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> d019e5d (Lint)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 4a2f0ae (Dusting)
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> 67705af (Lint)
>>>>>>> 0777dc9 (first)

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
<<<<<<< HEAD
<<<<<<< HEAD
                return trimPath($page->getPath()) == trimPath($child);
=======
                return trimPath($page->getPath()) === trimPath($child);
>>>>>>> dev
=======
                return trimPath($page->getPath()) == trimPath($child);
>>>>>>> 0777dc9 (first)
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : $page->baseUrl.'/'.trimPath($path);
    },
<<<<<<< HEAD
];
=======
<<<<<<< HEAD
<<<<<<< HEAD
];
=======
];
>>>>>>> 285fa96 (.)
=======
];
>>>>>>> d019e5d (Lint)
>>>>>>> 0777dc9 (first)
