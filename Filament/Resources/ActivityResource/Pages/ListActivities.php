<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Actions\CreateAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Activity\Filament\Resources\ActivityResource;
=======
>>>>>>> 0b4b2ff (.)
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\EditAction;
=======
>>>>>>> 0203a45 (up)
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListActivities extends ListRecords
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = ActivityResource::class;

<<<<<<< HEAD
    public function getTableFilters(): array
    {
        return [];
    }

    public function getTableActions(): array
    {
        return [
            // Tables\Actions\EditAction::make()->label(''),
            Tables\Actions\ViewAction::make()->label(''),
            // Tables\Actions\DeleteAction::make()->label(''),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function getTableEmptyStateActions(): array
    {
        return [
        ];
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->emptyStateActions($this->getTableEmptyStateActions())
>>>>>>> 5d7c9b9 (Fixed typo in Activity model.)
=======
            ->emptyStateActions($this->getTableEmptyStateActions())
>>>>>>> 170492e (rebase 51/58)
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }

    public function getGridTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('description'),
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('description'),
        ];
    }
=======
    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;
>>>>>>> c1a5089 (up)

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
<<<<<<< HEAD

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

    public function getTableEmptyStateActions(): array
    {
        return [
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->emptyStateActions($this->getTableEmptyStateActions())
        ;
    }
}
=======
}
>>>>>>> 170492e (rebase 51/58)
