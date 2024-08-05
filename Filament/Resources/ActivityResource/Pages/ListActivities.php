<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListActivities extends ListRecords
{
    protected static string $resource = ActivityResource::class;

    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTableColumns(): array
    {
        return [];
    }

    public function getTableFilters(): array
    {
        return [];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->emptyStateActions(
                [
                ]
            );
    }
}
