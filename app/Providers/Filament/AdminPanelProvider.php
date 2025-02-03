<?php

declare(strict_types=1);

namespace Modules\Activity\Providers\Filament;

use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Activity';

    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD

        $panel = parent::panel($panel);

=======
        
        $panel = parent::panel($panel);

       

>>>>>>> a4e7352 (up)
        return $panel;
    }
}
