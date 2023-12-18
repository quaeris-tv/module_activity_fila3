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
    'navigation' => require_once ('navigation.php'),
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> b4eb4c6 (.)
=======
    'navigation' => require_once ('navigation.php'),
>>>>>>> e1c77f7 (Lint)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 5a6cf49 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 8fd996a (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> abbb872 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 9debb00 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 17da9b0 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> da0cf65 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 2573e94 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 865bbb6 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 08a3afe (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> d37d627 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> aa9c1eb (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 874cad1 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> afac65a (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> 4aebfd9 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> f709bc8 (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> eb1881d (Dusting)
=======
    'navigation' => require_once('navigation.php'),
>>>>>>> b45eb9c (Dusting)

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
                return trimPath($page->getPath()) == trimPath($child);
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
