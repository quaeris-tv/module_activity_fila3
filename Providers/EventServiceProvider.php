<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;
<<<<<<< HEAD
use Modules\Activity\Listeners\LoginListener;
use Modules\Activity\Listeners\LogoutListener;
=======
>>>>>>> 4de3915 (add EventServiceProvider)

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
>>>>>>> 4de3915 (add EventServiceProvider)

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
<<<<<<< HEAD
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 4de3915 (add EventServiceProvider)
}
=======
}
>>>>>>> 12c62b6 (rebase 26/58)
