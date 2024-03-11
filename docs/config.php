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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'navigation' => include_once 'navigation.php',
=======
<<<<<<< HEAD
    'navigation' => require_once ('navigation.php'),
=======
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
>>>>>>> edba1131118fe43273e769e0d7e036e54ab0e8c9
>>>>>>> 8cb09c2 (rebase 1)
>>>>>>> 9868256 (🔧 chore(.gitignore): remove unnecessary files and directories from git tracking)
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> a3227dc (fix conflict)
=======
    'navigation' => include_once 'navigation.php',
>>>>>>> cd0d628 (up)
=======
    'navigation' => include_once 'navigation.php',
>>>>>>> master

    // helpers
    'isActive' => static function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => static function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                static function ($child) use ($page) {
                    return trimPath($page->getPath()) === trimPath($child);
=======
                function ($child) use ($page) {
                    return trimPath($page->getPath()) == trimPath($child);
>>>>>>> cd0d628 (up)
=======
                static function ($child) use ($page) {
                    return trimPath($page->getPath()) === trimPath($child);
>>>>>>> 5ca6ed5 (Inline constructor default to property, Add return type declarations, and Redirect route to toRoute helper)
=======
                static function ($child) use ($page) {
                    return trimPath($page->getPath()) === trimPath($child);
>>>>>>> master
                }
            );
        }
    },
    'url' => static function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : $page->baseUrl.'/'.trimPath($path);
    },
];
