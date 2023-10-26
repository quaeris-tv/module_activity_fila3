<?php

declare(strict_types=1);

namespace Modules\Activity\Models\Panels;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\Xot\Contracts\RowsContract;

class ActivityPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Activity\Models\Activity';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    public static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array
    {
        return [];
    }

    public function search(): array
    {
        return [];
    }

    /**
     * on select the option label.
     */
    public function optionLabel(\Modules\Activity\Models\Activity $row): string
    {
        return 'To Set';
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?Renderable
    {
        return null;
    }

    /**
     * Build an "index" query for the given resource.
     */
    public function indexQuery(array $data, RowsContract $query): RowsContract
    {
        // return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
     * 'value'=>'..',.
     */
    public function fields(): array
    {
        return [
            0 => (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            1 => (object) [
                'type' => 'String',
                'name' => 'log_name',
                'comment' => null,
            ],
            2 => (object) [
                'type' => 'Text',
                'name' => 'description',
                'rules' => 'required',
                'comment' => null,
            ],
            3 => (object) [
                'type' => 'String',
                'name' => 'subject_type',
                'comment' => null,
            ],
            4 => (object) [
                'type' => 'String',
                'name' => 'event',
                'comment' => null,
            ],
            5 => (object) [
                'type' => 'Bigint',
                'name' => 'subject_id',
                'comment' => null,
            ],
            6 => (object) [
                'type' => 'String',
                'name' => 'causer_type',
                'comment' => null,
            ],
            7 => (object) [
                'type' => 'Bigint',
                'name' => 'causer_id',
                'comment' => null,
            ],
            8 => (object) [
                'type' => 'Text',
                'name' => 'properties',
                'comment' => null,
            ],
            9 => (object) [
                'type' => 'String',
                'name' => 'batch_uuid',
                'comment' => null,
            ],
            10 => (object) [
                'type' => 'Datetime',
                'name' => 'created_at',
                'comment' => null,
            ],
            11 => (object) [
                'type' => 'Datetime',
                'name' => 'updated_at',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array
    {
        return [];
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(Request $request = null): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [];
    }
}
