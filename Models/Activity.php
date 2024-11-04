<?php
/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Activity\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\Activitylog\Models\Activity as SpatieActivity;

/**
 * Modules\Activity\Models\Activity.
 *
 
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

<<<<<<< HEAD
    // /**
    //  * @var array<string>
    //  *
    //  * @psalm-var list{'field_name'}
    //  */
    // protected $attributes = [
    //     'field_name',
    // ];
=======
    /**
     * @var array<string>
     *
     * @psalm-var list{'field_name'}
     */
    protected $attributes = [
        'field_name',
    ];
>>>>>>> 7352755 (up)

    /** @var string */
    protected $connection = 'activity';
}