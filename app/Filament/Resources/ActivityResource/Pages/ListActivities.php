<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======

>>>>>>> f51fd34 (up)

/**
 * @see ActivityResource
 */
class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

    public function getListTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            'description' => TextColumn::make('description')
                ->searchable()
                ->label('Description'),

            'subject_type' => TextColumn::make('subject_type')
                ->searchable()
                ->label('Subject Type'),

            'subject_id' => TextColumn::make('subject_id')
                ->sortable()
                ->label('Subject ID'),

            'causer_type' => TextColumn::make('causer_type')
                ->searchable()
                ->label('Causer Type'),

            'causer_id' => TextColumn::make('causer_id')
                ->sortable()
                ->label('Causer ID'),

            'created_at' => TextColumn::make('created_at')
                ->sortable()
                ->dateTime()
                ->label('Created At'),
=======
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable(),
            'description' => Tables\Columns\TextColumn::make('description'),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->sortable(),
=======
namespace App\Http\Livewire\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables\Columns\TextColumn;

class ListActivities extends \Filament\Resources\Pages\ListRecords
{
    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id'),
            'description' => TextColumn::make('description'),
            'subject_type' => TextColumn::make('subject_type'),
            'subject_id' => TextColumn::make('subject_id'),
            'causer_type' => TextColumn::make('causer_type'),
            'causer_id' => TextColumn::make('causer_id'),
            'created_at' => TextColumn::make('created_at'),
>>>>>>> 36aa08e (up)
>>>>>>> origin/dev
        ];
    }
}
