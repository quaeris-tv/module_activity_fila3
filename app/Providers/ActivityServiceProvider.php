<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

// use Modules\Xot\Services\BladeService;

/**
 * Undocumented class.
 */
class ActivityServiceProvider extends XotBaseServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD:app/Providers/ActivityServiceProvider.php
    public string $name = 'Activity';
=======
    public string $name = 'activity';
>>>>>>> 5b3e4a8 (up):Providers/ActivityServiceProvider.php
=======
    public string $name = 'Activity';
>>>>>>> 1350557 (up)

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
        // ...
        // activity()->log('boot');
        // Event::listen('*', function (string $eventName, array $data) {
        // dddx(['eventName' => $eventName, 'data' => $data]);
        // ...
        // activity()->log($eventName);
        /*
        try {
            activity()
                // ->performedOn($anEloquentModel)
                ->causedBy(auth()->user)
                ->withProperties($data)
                ->log($eventName);
        } catch (\Exception $e) {
            activity()->causedBy(auth()->user)
            ->withProperties(['message' => $e->getMessage()])
            ->log($e->getMessage());
        }
        */
        // });
    }

    public function register(): void
    {
        parent::register();
        // ...
        // activity()->log('register');
        // Event::listen('*', function (string $eventName, array $data) {
        //    dddx(['eventName' => $eventName, 'data' => $data]);
        //    // ...
        // });
    }
}
