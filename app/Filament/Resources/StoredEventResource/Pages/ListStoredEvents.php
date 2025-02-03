<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\StoredEventResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * @see StoredEventResource
 */
class ListStoredEvents extends XotBaseListRecords
{
    protected static string $resource = StoredEventResource::class;

    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            'event_class' => TextColumn::make('event_class')
                ->searchable()
                ->sortable()
                ->wrap()
                ->label('Event Class'),

            'event_properties' => ViewColumn::make('event_properties')
                ->view('activity::filament.tables.columns.event-properties')
                ->label('Event Properties'),

            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->label('Created At'),
        ];
    }
}
