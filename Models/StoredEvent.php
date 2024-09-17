<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent as SpatieStoredEvent;

// use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

/**
 * Modules\Activity\Models\StoredEvent.
 *
 * @property int $id
 * @property string|null $aggregate_uuid
 * @property int|null $aggregate_version
 * @property int $event_version
 * @property string $event_class
 * @property array $event_properties
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $meta_data
 * @property string $created_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent afterVersion(int $version)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent lastEvent(string ...$eventClasses)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent newModelQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent newQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent query()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent startingFrom(int $storedEventId)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereAggregateRoot(string $uuid)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereAggregateUuid($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereAggregateVersion($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereCreatedAt($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereCreatedBy($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereEvent(string ...$eventClasses)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereEventClass($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereEventProperties($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereEventVersion($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereId($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereMetaData($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIs(string $property, ?mixed $value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent wherePropertyIsNot(string $property, ?mixed $value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent whereUpdatedBy($value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent withMetaDataAttributes()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static> get($columns = ['*'])
 * @mixin \Eloquent
 */
class StoredEvent extends SpatieStoredEvent
{
    /**
     * @var array<string>
     *
     * @psalm-var list{'id', 'aggregate_uuid', 'aggregate_version', 'event_version', 'event_class', 'event_properties', 'meta_data', 'created_at', 'event_class', 'aggregate_uuid', 'created_at', 'updated_at'}
     */
    protected $fillable = ['id', 'aggregate_uuid', 'aggregate_version', 'event_version', 'event_class', 'event_properties', 'meta_data', 'created_at', 'event_class', 'aggregate_uuid', 'created_at', 'updated_at'];

    /**
     * @var array<string>
     *
     * @psalm-var list{'field_name'}
     */
    protected $attributes = ['field_name'];

    /** @var string */
    protected $connection = 'activity';
}
