<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Modules\Activity\Filament\Resources\ActivityResource\Pages\CreateActivity;
use Modules\Activity\Filament\Resources\ActivityResource\Pages\EditActivity;
use Modules\Activity\Filament\Resources\ActivityResource\Pages\ListActivities;
use Modules\Activity\Models\Activity;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                ]
            )
            ->filters(
                [
                ]
            )
            ->actions(
                [
<<<<<<< HEAD
                    EditAction::make(),
=======
                EditAction::make(),
>>>>>>> cd0d628 (up)
                ]
            )
            ->bulkActions(
                [
<<<<<<< HEAD
                    BulkActionGroup::make(
                        [
                            DeleteBulkAction::make(),
                        ]
                    ),
=======
                BulkActionGroup::make(
                    [
                    DeleteBulkAction::make(),
                    ]
                ),
>>>>>>> cd0d628 (up)
                ]
            )
            ->emptyStateActions(
                [
<<<<<<< HEAD
                    // {{ tableEmptyStateActions }}
=======
                // {{ tableEmptyStateActions }}
>>>>>>> cd0d628 (up)
                ]
            );
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
            'index' => ListActivities::route('/'),
            'create' => CreateActivity::route('/create'),
            'edit' => EditActivity::route('/{record}/edit'),
        ];
    }
}
