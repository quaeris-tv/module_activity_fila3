<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
>>>>>>> 36aa08e (up)

class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;
<<<<<<< HEAD

    public function getListTableColumns(): array
    {
        $view = 'activity::filament.tables.columns.state';
        if (! view()->exists($view)) {
            throw new \Exception('view ['.$view.'] Not Exists');
        }

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
                ->view($view),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }
=======
>>>>>>> 36aa08e (up)
}
