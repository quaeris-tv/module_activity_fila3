<?php

/**
 * Activity Resource Class.
 *
 * This class manages the Activity model in the Filament admin panel.
 * It provides functionality for listing, creating, and editing activity records.
 */

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Modules\Activity\Filament\Resources\ActivityResource\Pages;
use Modules\Activity\Models\Activity;
use Modules\Xot\Filament\Resources\XotBaseResource;

/**
 * ActivityResource Class.
 */
class ActivityResource extends XotBaseResource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Define the form schema for the Activity resource.
     *
     * @return array The form schema configuration
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('log_name')
                ->required()
                ->maxLength(255)
                ->label('Log Name')
                ->placeholder('Enter log name')
                ->helperText('The name of the log entry'),

            TextInput::make('description')
                ->required()
                ->maxLength(255)
                ->label('Description')
                ->placeholder('Enter description')
                ->helperText('A description of the activity'),

            TextInput::make('subject_type')
                ->required()
                ->maxLength(255)
                ->label('Subject Type')
                ->placeholder('Enter subject type')
                ->helperText('The type of the subject being logged'),

            TextInput::make('subject_id')
                ->numeric()
                ->required()
                ->label('Subject ID')
                ->placeholder('Enter subject ID')
                ->helperText('The ID of the subject being logged'),

            TextInput::make('causer_type')
                ->maxLength(255)
                ->label('Causer Type')
                ->placeholder('Enter causer type')
                ->helperText('The type of the causer (optional)'),

            TextInput::make('causer_id')
                ->numeric()
                ->label('Causer ID')
                ->placeholder('Enter causer ID')
                ->helperText('The ID of the causer (optional)'),

            KeyValue::make('properties')
                ->columnSpanFull()
                ->label('Properties')
                ->helperText('Additional properties for this activity'),

            TextInput::make('batch_uuid')
                ->maxLength(36)
                ->label('Batch UUID')
                ->placeholder('Enter batch UUID')
                ->helperText('UUID for batch operations (optional)'),
        ];
    }

    /**
     * Get the relations for the Activity resource.
     *
     * @return array The relations configuration
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * Get the pages for the Activity resource.
     *
     * @return array<string, PageRegistration> The pages configuration
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
