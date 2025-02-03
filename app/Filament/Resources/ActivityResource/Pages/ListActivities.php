<?php

<<<<<<< HEAD
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
            'id'=>Tables\Columns\TextColumn::make('id')
                ->sortable(),
            'description'=> Tables\Columns\TextColumn::make('description'),
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
        ];
    }
}
