<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;
<<<<<<< HEAD
use Modules\Activity\Listeners\LoginListener;
use Modules\Activity\Listeners\LogoutListener;
=======
>>>>>>> c72b996 (.)

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
<<<<<<< HEAD
    protected $listen = [
        \Illuminate\Auth\Events\Login::class => [
            LoginListener::class,
        ],
        \Illuminate\Auth\Events\Logout::class => [
            LogoutListener::class,
        ],
    ];
=======
    protected $listen = [];
>>>>>>> c72b996 (.)

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> c72b996 (.)
}
