<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

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

class StoredEventResource extends XotBaseResource
{
    protected static ?string $model = StoredEvent::class;

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
