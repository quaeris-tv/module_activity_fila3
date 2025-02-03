<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
<<<<<<< HEAD
use Modules\Activity\Filament\Resources\SnapshotResource\Pages;
use Modules\Activity\Models\Snapshot;
use Modules\Xot\Filament\Resources\XotBaseResource;
=======
use Filament\Resources\Resource;
use Modules\Activity\Models\Snapshot;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\SnapshotResource\Pages;
>>>>>>> 36aa08e (up)

class SnapshotResource extends XotBaseResource
{
    protected static ?string $model = Snapshot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

<<<<<<< HEAD
    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('model_type')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('model_id')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\KeyValue::make('state')
                ->columnSpanFull(),
            \Filament\Forms\Components\TextInput::make('created_by_type')
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('created_by_id')
                ->numeric(),
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
            'index' => Pages\ListSnapshots::route('/'),
            'create' => Pages\CreateSnapshot::route('/create'),
            'edit' => Pages\EditSnapshot::route('/{record}/edit'),
        ];
    }
}
