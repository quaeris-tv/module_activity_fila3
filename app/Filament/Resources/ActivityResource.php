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
 * Activity Resource Class.
 *
 * This resource class is responsible for configuring the Activity model in the Filament admin panel.
 * It defines the form schema, relations, and pages for managing activity records.
 *
 * @property ActivityResource $resource
 * @package Modules\Activity
 */
class ActivityResource extends XotBaseResource
{
    protected static ?string $model = Activity::class;

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
