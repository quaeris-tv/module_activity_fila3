<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\StoredEventResource\Pages;

class StoredEventResource extends XotBaseResource
{
    protected static ?string $model = StoredEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('event_class')
                ->required()
                ->maxLength(255)
                ->label('Event Class')
                ->placeholder('Enter event class')
                ->helperText('The class name of the event'),

            KeyValue::make('event_properties')
                ->columnSpanFull()
                ->label('Event Properties')
                ->helperText('Properties associated with this event'),

            TextInput::make('aggregate_uuid')
                ->maxLength(36)
                ->label('Aggregate UUID')
                ->placeholder('Enter aggregate UUID')
                ->helperText('UUID of the aggregate (optional)'),

            TextInput::make('aggregate_version')
                ->numeric()
                ->label('Aggregate Version')
                ->placeholder('Enter aggregate version')
                ->helperText('Version number of the aggregate'),

            Textarea::make('meta_data')
                ->columnSpanFull()
                ->label('Meta Data')
                ->placeholder('Enter meta data')
                ->helperText('Additional metadata for this event'),

            DateTimePicker::make('created_at')
                ->required()
                ->label('Created At')
                ->helperText('When this event was created')
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStoredEvents::route('/'),
            'create' => Pages\CreateStoredEvent::route('/create'),
            'edit' => Pages\EditStoredEvent::route('/{record}/edit'),
        ];
    }
}
