<?php

declare(strict_types=1);

use Illuminate\Support\Str;

$moduleName = 'Activity';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo '.$moduleName,
    'siteDescription' => 'Modulo '.$moduleName,
    'lang' => 'it',

    'collections' => [
        'posts' => [
            'path' => function ($page) {
                // return $page->lang.'/posts/'.Str::slug($page->getFilename());
                // return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/'.Str::slug($page->getFilename());
            },
        ],
        'docs' => [
            'path' => function ($page) {
                // return $page->lang.'/docs/'.Str::slug($page->getFilename());
                return 'docs/'.Str::slug($page->getFilename());
            },
        ],
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
<<<<<<< HEAD
<<<<<<< HEAD

    'navigation' => require_once ('navigation.php'),
=======
<<<<<<< HEAD
=======
>>>>>>> dev
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
<<<<<<< HEAD
>>>>>>> dev
=======
>>>>>>> dev

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
<<<<<<< HEAD
<<<<<<< HEAD
                return trimPath($page->getPath()) === trimPath($child);
=======
                return trimPath($page->getPath()) == trimPath($child);
>>>>>>> dev
=======
                return trimPath($page->getPath()) == trimPath($child);
>>>>>>> dev
            });
        }
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    },
];
