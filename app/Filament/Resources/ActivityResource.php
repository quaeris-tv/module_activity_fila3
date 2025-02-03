<?php

/**
 * --.
 */

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Pages\PageRegistration;
use Modules\Activity\Filament\Resources\ActivityResource\Pages;
use Modules\Activity\Models\Activity;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ActivityResource extends XotBaseResource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('log_name')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('description')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('subject_type')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('subject_id')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\TextInput::make('causer_type')
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('causer_id')
                ->numeric(),
            \Filament\Forms\Components\KeyValue::make('properties')
                ->columnSpanFull(),
            \Filament\Forms\Components\TextInput::make('batch_uuid')
                ->maxLength(36),
        ];
    }

    /**
     * @psalm-return array<never, never>
     */
    public static function getRelations(): array
    {
        return [
        ];
    }

    /**
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}
