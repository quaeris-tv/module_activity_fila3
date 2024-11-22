<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Activity\Filament\Resources\StoredEventResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListStoredEvents extends XotBaseListRecords
{
    
    protected static string $resource = StoredEventResource::class;

    public function table(Table $table): Table
    {
        return $table
            // ->columns($this->getTableColumns())
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())

            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }

    public function getGridTableColumns(): array
    {
        return [
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('event_class'),
            // Tables\Columns\TextColumn::make('event_properties'),
            Tables\Columns\ViewColumn::make('event_properties')->view('activity::filament.tables.columns.event-properties'),
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label(''),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
