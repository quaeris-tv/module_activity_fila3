<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Illuminate\Support\Facades\Event;
use Modules\Xot\Providers\XotBaseServiceProvider;

// use Modules\Xot\Services\BladeService;

/**
 * Undocumented class.
 */
class ActivityServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'activity';

    public function bootCallback(): void
    {
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

    public function registerCallback(): void
    {
        // ...
        // activity()->log('register');
        // Event::listen('*', function (string $eventName, array $data) {
        //    dddx(['eventName' => $eventName, 'data' => $data]);
        //    // ...
        // });
    }
}