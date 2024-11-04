<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Collection;
use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent as SpatieStoredEvent;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;
use Spatie\SchemalessAttributes\SchemalessAttributes;

/**
 * Class StoredEvent
 *
 * Represents a stored event in the activity module.
 *
 * @property int $id
 * @property string|null $aggregate_uuid
 * @property int|null $aggregate_version
 * @property int $event_version
 * @property string $event_class
 * @property array $event_properties
 * @property SchemalessAttributes $meta_data
 * @property string $created_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read ShouldBeStored|null $event
 *
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent afterVersion(int $version)
 * @method static Collection|StoredEvent[] all($columns = ['*'])
 * @method static Collection|StoredEvent[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent lastEvent(string ...$eventClasses)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent startingFrom(int $storedEventId)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereAggregateRoot(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereAggregateUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereAggregateVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereEvent(string ...$eventClasses)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereEventClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereEventProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereEventVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereMetaData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent wherePropertyIs(string $property, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent wherePropertyIsNot(string $property, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoredEvent withMetaDataAttributes()
 *
<<<<<<< HEAD
=======
 * @property int                                                    $id
 * @property string|null                                            $aggregate_uuid
 * @property int|null                                               $aggregate_version
 * @property int                                                    $event_version
 * @property string                                                 $event_class
 * @property array                                                  $event_properties
 * @property SchemalessAttributes                                   $meta_data
 * @property string                                                 $created_at
 * @property string|null                                            $created_by
 * @property string|null                                            $updated_by
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @method static EloquentStoredEventQueryBuilder|StoredEvent afterVersion(int $version)
 * @method static EloquentStoredEventCollection<int, static>  all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>  get($columns = ['*'])
 * @method static EloquentStoredEventQueryBuilder|StoredEvent lastEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent newModelQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent newQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent query()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent startingFrom(int $storedEventId)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateRoot(string $uuid)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateUuid($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereAggregateVersion($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereCreatedAt($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereCreatedBy($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventClass($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventProperties($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereEventVersion($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereId($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereMetaData($value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIs(string $property, ?mixed $value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIsNot(string $property, ?mixed $value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent whereUpdatedBy($value)
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @property SchemalessAttributes                                   $meta_data
<<<<<<< HEAD
 *
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   afterVersion(int $version)
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   lastEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   newModelQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   newQuery()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   query()
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   startingFrom(int $storedEventId)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   whereAggregateRoot(string $uuid)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   whereEvent(string ...$eventClasses)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   wherePropertyIs(string $property, ?mixed $value)
 * @method static EloquentStoredEventQueryBuilder|StoredEvent                                                   wherePropertyIsNot(string $property, ?mixed $value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|EloquentStoredEvent withMetaDataAttributes()
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2c10729 (up)
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
<<<<<<< HEAD
>>>>>>> ccedceb (up)
=======
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static>                                                    get($columns = ['*'])
 *
>>>>>>> 7937bcb (.)
=======
>>>>>>> 2c10729 (up)
=======
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|EloquentStoredEvent withMetaDataAttributes()
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
<<<<<<< HEAD
>>>>>>> c5c8925 (up)
=======
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
<<<<<<< HEAD
>>>>>>> a74f610 (up)
=======
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
<<<<<<< HEAD
>>>>>>> 65b5ca5 (up)
=======
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static EloquentStoredEventCollection<int, static> get($columns = ['*'])
>>>>>>> 67f9cf7 (up)
 * @mixin \Eloquent
 */
class StoredEvent extends SpatieStoredEvent
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'aggregate_uuid',
        'aggregate_version',
        'event_version',
        'event_class',
        'event_properties',
        'meta_data',
        'created_at',
        'updated_by',
        'created_by',
    ];

    // protected $attributes = [
    //     'field_name' => '',
    // ];

    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'activity';
}
