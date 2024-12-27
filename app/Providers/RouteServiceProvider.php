<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    protected string $moduleNamespace = 'Modules\Activity\Http\Controllers';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD:app/Providers/RouteServiceProvider.php

=======
>>>>>>> 5b3e4a8 (up):Providers/RouteServiceProvider.php
    public string $name = 'Activity';
}
