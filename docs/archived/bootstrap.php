<?php

declare(strict_types=1);

use App\Listeners\GenerateSitemap;

<<<<<<< HEAD
<<<<<<< HEAD
/* @var \Illuminate\Container\Container $container */
/* @var \TightenCo\Jigsaw\Events\EventBus $events */
=======
/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */
>>>>>>> 5ca6ed5 (Inline constructor default to property, Add return type declarations, and Redirect route to toRoute helper)
=======
/* @var \Illuminate\Container\Container $container */
/* @var \TightenCo\Jigsaw\Events\EventBus $events */
>>>>>>> 3690197 (Lint)

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(GenerateSitemap::class);
