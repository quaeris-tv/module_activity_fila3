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
 * @property int                             $id
 * @property string|null                     $log_name
 * @property string                          $description
 * @property string|null                     $subject_type
 * @property int|null                        $subject_id
 * @property string|null                     $causer_type
 * @property int|null                        $causer_id
 * @property Collection|null                 $properties
 * @property string|null                     $batch_uuid
 * @property string|null                     $event
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fb4eca6a8b2cab7a56e0a5271e6e4c9245516d3
=======
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property Model|\Eloquent                 $causer
 * @property Collection                      $changes
 * @property Model|\Eloquent                 $subject
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @method static Builder|Activity                               causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static Builder|Activity                               forBatch(string $batchUuid)
 * @method static Builder|Activity                               forEvent(string $event)
 * @method static Builder|Activity                               forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static Builder|Activity                               hasBatch()
 * @method static Builder|Activity                               inLog(...$logNames)
=======
=======
>>>>>>> dda5897f8b272c3c05d7606217001322264add4a
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Model|Eloquent $causer
 * @property Collection $changes
 * @property Model|Eloquent $subject
 *
<<<<<<< HEAD
 * @method static Builder|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static Builder|Activity forBatch(string $batchUuid)
 * @method static Builder|Activity forEvent(string $event)
 * @method static Builder|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static Builder|Activity hasBatch()
 * @method static Builder|Activity inLog(...$logNames)
>>>>>>> a34a493a52d04625c3ab4ad527762be38475eae2
=======
=======
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @method static EloquentBuilder|Activity                       causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static EloquentBuilder|Activity                       forBatch(string $batchUuid)
 * @method static EloquentBuilder|Activity                       forEvent(string $event)
 * @method static EloquentBuilder|Activity                       forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static EloquentBuilder|Activity                       hasBatch()
 * @method static EloquentBuilder|Activity                       inLog(...$logNames)
<<<<<<< HEAD
>>>>>>> 9fb4eca6a8b2cab7a56e0a5271e6e4c9245516d3
=======
 * @method static EloquentBuilder|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static EloquentBuilder|Activity forBatch(string $batchUuid)
 * @method static EloquentBuilder|Activity forEvent(string $event)
 * @method static EloquentBuilder|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static EloquentBuilder|Activity hasBatch()
 * @method static EloquentBuilder|Activity inLog(...$logNames)
>>>>>>> dda5897f8b272c3c05d7606217001322264add4a
=======
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereBatchUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCauserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCauserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereLogName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @property Model|Eloquent $causer
 * @property Collection $changes
<<<<<<< HEAD
 * @property Model|\Eloquent $subject
<<<<<<< HEAD
 *
<<<<<<< HEAD
 * @method static Builder|Activity                               causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static Builder|Activity                               forBatch(string $batchUuid)
 * @method static Builder|Activity                               forEvent(string $event)
 * @method static Builder|Activity                               forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static Builder|Activity                               hasBatch()
 * @method static Builder|Activity                               inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
<<<<<<< HEAD
 *
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedBy($value)
 *
=======
=======
=======
>>>>>>> d9ef0ffe4fa6513a54151c0ad1ce6baa09060a49
=======
 * @property Model|Eloquent $subject
 *
>>>>>>> 7e50b869544b76b87ff8417425294c8ac8446058
 * @method static Builder|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static Builder|Activity forBatch(string $batchUuid)
 * @method static Builder|Activity forEvent(string $event)
 * @method static Builder|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static Builder|Activity hasBatch()
 * @method static Builder|Activity inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
<<<<<<< HEAD
<<<<<<< HEAD
 *
>>>>>>> a34a493a52d04625c3ab4ad527762be38475eae2
=======
>>>>>>> d9ef0ffe4fa6513a54151c0ad1ce6baa09060a49
=======
 *
>>>>>>> 7e50b869544b76b87ff8417425294c8ac8446058
=======
=======
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @property Model|\Eloquent $causer
 * @property Collection      $changes
 * @property Model|\Eloquent $subject
 * @method static EloquentBuilder|Activity                       causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static EloquentBuilder|Activity                       forBatch(string $batchUuid)
 * @method static EloquentBuilder|Activity                       forEvent(string $event)
 * @method static EloquentBuilder|Activity                       forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static EloquentBuilder|Activity                       hasBatch()
 * @method static EloquentBuilder|Activity                       inLog(...$logNames)
<<<<<<< HEAD
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
>>>>>>> 9fb4eca6a8b2cab7a56e0a5271e6e4c9245516d3
=======
 *
 * @property Model|Eloquent $causer
 * @property Collection $changes
 * @property Model|Eloquent $subject
 *
 * @method static EloquentBuilder|Activity causedBy(\Illuminate\Database\Eloquent\Model $causer)
 * @method static EloquentBuilder|Activity forBatch(string $batchUuid)
 * @method static EloquentBuilder|Activity forEvent(string $event)
 * @method static EloquentBuilder|Activity forSubject(\Illuminate\Database\Eloquent\Model $subject)
 * @method static EloquentBuilder|Activity hasBatch()
 * @method static EloquentBuilder|Activity inLog(...$logNames)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 *
>>>>>>> dda5897f8b272c3c05d7606217001322264add4a
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 371cbe57533c730958aef04fede57e1191836150
=======
 *
>>>>>>> a34a493a52d04625c3ab4ad527762be38475eae2
=======
>>>>>>> d9ef0ffe4fa6513a54151c0ad1ce6baa09060a49
=======
 *
>>>>>>> 7e50b869544b76b87ff8417425294c8ac8446058
=======
>>>>>>> 9fb4eca6a8b2cab7a56e0a5271e6e4c9245516d3
=======
 *
>>>>>>> dda5897f8b272c3c05d7606217001322264add4a
=======
>>>>>>> 68c59b895b753d63ace21b76108646c5b94e5631
 * @mixin \Eloquent
 * @mixin Eloquent
 */
class Activity extends SpatieActivity
{
    /**
     * @var array<string>
     *
     * @psalm-var list{'id', 'log_name', 'description', 'subject_type', 'event', 'subject_id', 'causer_type', 'causer_id', 'properties', 'batch_uuid', 'created_at', 'updated_at'}
     */
    protected $fillable = ['id', 'log_name', 'description', 'subject_type', 'event', 'subject_id', 'causer_type', 'causer_id', 'properties', 'batch_uuid', 'created_at', 'updated_at'];

    // /**
    //  * @var array<string>
    //  *
    //  * @psalm-var list{'field_name'}
    //  */
    // protected $attributes = [
    //     'field_name',
    // ];

    /** @var string */
    protected $connection = 'activity';
}
