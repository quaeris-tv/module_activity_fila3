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
            'path' => static function ($page) {
                // return $page->lang.'/posts/'.Str::slug($page->getFilename());
                // return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/'.Str::slug($page->getFilename());
            },
        ],
        'docs' => [
            'path' => static function ($page) {
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

    // helpers
    'isActive' => static function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => static function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => static function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(
                static function ($child) use ($page) {
                    return trimPath($page->getPath()) === trimPath($child);
                }
            );
        }
    }, /*
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
    'url' => static function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },

    'children' => static function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    },
];
