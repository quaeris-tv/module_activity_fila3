<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Traits\HasXotTable;

class ListActivities extends ListRecords
{
    use HasXotTable;
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = ActivityResource::class;

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            Tables\Columns\TextColumn::make('description')
                ->label('Description'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->sortable(),
        ];
    }
}
