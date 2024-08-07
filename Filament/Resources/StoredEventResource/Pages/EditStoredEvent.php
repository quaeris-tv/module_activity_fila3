<?php

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Modules\Activity\Filament\Resources\StoredEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStoredEvent extends EditRecord
{
    protected static string $resource = StoredEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
