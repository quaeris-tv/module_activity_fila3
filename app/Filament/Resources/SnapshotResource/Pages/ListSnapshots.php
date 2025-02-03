<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

<<<<<<< HEAD
use Filament\Tables;
=======
<<<<<<< HEAD
>>>>>>> origin/dev
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
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

/**
 * @see SnapshotResource
 */
class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;
<<<<<<< HEAD
<<<<<<< HEAD

    public function getListTableColumns(): array
    {
        $view = 'activity::filament.tables.columns.state';
        if (! view()->exists($view)) {
            throw new \Exception('view ['.$view.'] Not Exists');
        }
<<<<<<< HEAD

=======
=======

    public function getListTableColumns(): array
    {
>>>>>>> a0e69f7 (up)
>>>>>>> af93a00 (rebase 20)
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            'aggregate_uuid' => TextColumn::make('aggregate_uuid')
                ->searchable()
                ->sortable()
                ->wrap()
                ->label('Aggregate UUID'),

            'aggregate_version' => TextColumn::make('aggregate_version')
                ->numeric()
                ->sortable()
                ->label('Aggregate Version'),

            'state' => ViewColumn::make('state')
<<<<<<< HEAD
                ->view($view)
                ->label('State'),

=======
<<<<<<< HEAD
                ->view($view),
=======
                ->view('activity::filament.tables.columns.state'),
>>>>>>> a0e69f7 (up)
>>>>>>> origin/dev
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->label('Created At'),

            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->label('Updated At'),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('aggregate_uuid')
                ->options(fn () => SnapshotResource::getModel()::distinct()->pluck('aggregate_uuid', 'aggregate_uuid')->toArray()),
        ];
    }

    public function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }
<<<<<<< HEAD
=======
>>>>>>> 36aa08e (up)
=======
>>>>>>> a0e69f7 (up)
}
