<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\Snapshots\EloquentSnapshot as SpatieSnapshot;

/**
 * Modules\Activity\Models\Snapshot.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Snapshot query()
 * @method static Builder|EloquentSnapshot                       uuid(string $uuid)
 *
 * @mixin \Eloquent
 */
class Snapshot extends SpatieSnapshot
{
    /**
     * @var array<string>
     *
     * @psalm-var list{'id', 'aggregate_uuid', 'aggregate_version', 'state', 'created_at', 'updated_at'}
     */
    protected $fillable = ['id', 'aggregate_uuid', 'aggregate_version', 'state', 'created_at', 'updated_at'];

    /**
     * @var array<string>
     *
     * @psalm-var list{'field_name'}
     */
    protected $attributes = ['field_name'];

    protected $connection = 'mysql';
}
