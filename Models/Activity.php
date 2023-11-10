<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Spatie\Activitylog\Models\Activity as SpatieActivity;

/**
 * Modules\Activity\Models\Activity
 *
 * @property-read Model|\Eloquent $causer
 * @property-read Collection $changes
 * @property-read Model|\Eloquent $subject
 * @method static Builder|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static Builder|Activity forBatch(string $batchUuid)
 * @method static Builder|Activity forEvent(string $event)
 * @method static Builder|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static Builder|Activity hasBatch()
 * @method static Builder|Activity inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @mixin \Eloquent
 */
class Activity extends SpatieActivity
{
    /**
     * @var array<string>
     *
     * @psalm-var list{'id', 'log_name', 'description', 'subject_type', 'event', 'subject_id', 'causer_type', 'causer_id', 'properties', 'batch_uuid', 'created_at', 'updated_at'}
     */
    protected $fillable = ['id', 'log_name', 'description', 'subject_type', 'event', 'subject_id', 'causer_type', 'causer_id', 'properties', 'batch_uuid', 'created_at', 'updated_at'];

    /**
     * @var array<string>
     *
     * @psalm-var list{'field_name'}
     */
    protected $attributes = ['field_name'];

    protected $connection = 'mysql';
}
