<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

    public function getListTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable(),
            'description' => Tables\Columns\TextColumn::make('description'),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->sortable(),
        ];
    }
}
