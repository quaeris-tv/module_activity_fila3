<?php
<<<<<<< HEAD
=======
/**
 * --.
 */
>>>>>>> 36aa08e (up)

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

<<<<<<< HEAD
use Filament\Resources\Pages\PageRegistration;
use Modules\Activity\Filament\Resources\ActivityResource\Pages;
use Modules\Activity\Models\Activity;
use Modules\Xot\Filament\Resources\XotBaseResource;

/**
 * @property ActivityResource $resource
 */
=======
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Modules\Activity\Models\Activity;
use Filament\Resources\Pages\PageRegistration;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\ActivityResource\Pages;

>>>>>>> 36aa08e (up)
class ActivityResource extends XotBaseResource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

<<<<<<< HEAD
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
=======
    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                ]
            );
>>>>>>> 36aa08e (up)
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
