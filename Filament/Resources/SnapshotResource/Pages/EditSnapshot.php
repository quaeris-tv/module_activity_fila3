<?php

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Modules\Activity\Filament\Resources\SnapshotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSnapshot extends EditRecord
{
    protected static string $resource = SnapshotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
