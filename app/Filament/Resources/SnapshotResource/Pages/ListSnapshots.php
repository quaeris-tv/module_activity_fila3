<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======
use Modules\Activity\Filament\Resources\SnapshotResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseListRecords;
>>>>>>> 36aa08e (up)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> f51fd34 (up)
=======
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
>>>>>>> a0e69f7 (up)

class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;
<<<<<<< HEAD
<<<<<<< HEAD

    public function getListTableColumns(): array
    {
        $view='activity::filament.tables.columns.state';
        if(!view()->exists($view)){
            throw new \Exception('view ['.$view.'] Not Exists');
        }
=======

    public function getListTableColumns(): array
    {
>>>>>>> a0e69f7 (up)
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
<<<<<<< HEAD
                ->view($view),
=======
                ->view('activity::filament.tables.columns.state'),
>>>>>>> a0e69f7 (up)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }
<<<<<<< HEAD
=======
>>>>>>> 36aa08e (up)
=======
>>>>>>> a0e69f7 (up)
}
