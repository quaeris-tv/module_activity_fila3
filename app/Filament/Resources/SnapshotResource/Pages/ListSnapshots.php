<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;

    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable(),
            'aggregate_uuid' => TextColumn::make('aggregate_uuid')
                ->searchable()
                ->sortable()
                ->wrap(),
            'aggregate_version' => TextColumn::make('aggregate_version')
                ->numeric()
                ->sortable(),
            'state' => ViewColumn::make('state')
                ->view('activity::filament.tables.columns.state'),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }
}
