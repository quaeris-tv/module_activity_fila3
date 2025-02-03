<?php

declare(strict_types=1);

return [
    'name' => 'Activity',
<<<<<<< HEAD
    'description' => 'Modulo per il tracciamento delle attività degli utenti',
    // 'icon' => 'heroicon-o-clock',
    'icon' => 'activity-icon',
    'navigation' => [
        'enabled' => true,
        'sort' => 20,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\Activity\\Providers\\ActivityServiceProvider',
    ],
<<<<<<< HEAD
    'navigation_sort' => 1,
    'icon' => 'heroicon-o-clipboard-document-list', // icon on dashboard
=======
=======
    'navigation_sort' => 1,
    'icon' => 'heroicon-o-clipboard-document-list', // icon on dashboard
>>>>>>> 5b3e4a8 (up)
>>>>>>> origin/dev
];
