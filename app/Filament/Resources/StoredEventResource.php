<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\StoredEventResource\Pages;
=======
use Filament\Forms\Form;
<<<<<<< HEAD
use Modules\Activity\Filament\Resources\StoredEventResource\Pages;
use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Filament\Resources\XotBaseResource;
=======
use Filament\Resources\Resource;
use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\StoredEventResource\Pages;
>>>>>>> 36aa08e (up)
>>>>>>> origin/dev

class StoredEventResource extends XotBaseResource
{
    protected static ?string $model = StoredEvent::class;

<<<<<<< HEAD
    public static function getFormSchema(): array
    {
        return [
            'event_class' => Forms\Components\TextInput::make('event_class')
                ->required()
                ->maxLength(255)
                ->label('Event Class')
                ->placeholder('Enter event class')
                ->helperText('The class name of the event'),

            'event_properties' => Forms\Components\KeyValue::make('event_properties')
                ->columnSpanFull()
                ->label('Event Properties')
                ->helperText('Properties associated with this event'),

            'aggregate_uuid' => Forms\Components\TextInput::make('aggregate_uuid')
                ->maxLength(36)
                ->label('Aggregate UUID')
                ->placeholder('Enter aggregate UUID')
                ->helperText('UUID of the aggregate (optional)'),

            'aggregate_version' => Forms\Components\TextInput::make('aggregate_version')
                ->numeric()
                ->label('Aggregate Version')
                ->placeholder('Enter aggregate version')
                ->helperText('Version number of the aggregate'),

            'meta_data' => Forms\Components\Textarea::make('meta_data')
                ->columnSpanFull()
                ->label('Meta Data')
                ->placeholder('Enter meta data')
                ->helperText('Additional metadata for this event'),

            'created_at' => Forms\Components\DateTimePicker::make('created_at')
                ->required()
                ->label('Created At')
                ->helperText('When this event was created')
        ];
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

<<<<<<< HEAD
    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('event_class')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\KeyValue::make('event_properties')
                ->columnSpanFull(),
            \Filament\Forms\Components\TextInput::make('aggregate_uuid')
                ->maxLength(36),
            \Filament\Forms\Components\TextInput::make('aggregate_version')
                ->numeric(),
            \Filament\Forms\Components\Textarea::make('meta_data')
                ->columnSpanFull(),
            \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
        ];
=======
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
>>>>>>> 36aa08e (up)
>>>>>>> origin/dev
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
