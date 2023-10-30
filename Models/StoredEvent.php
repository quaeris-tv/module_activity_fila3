<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent as SpatieStoredEvent;

/**
 * Modules\Activity\Models\StoredEvent.
 *
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes      $meta_data
 *
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         afterVersion(int $version)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static>          all($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection<int, static>          get($columns = ['*'])
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         lastEvent(string ...$eventClasses)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         newModelQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         newQuery()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         query()
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         startingFrom(int $storedEventId)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         whereAggregateRoot(string $uuid)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         whereEvent(string ...$eventClasses)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         wherePropertyIs(string $property, ?mixed $value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|StoredEvent         wherePropertyIsNot(string $property, ?mixed $value)
 * @method static \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder|EloquentStoredEvent withMetaDataAttributes()
 *
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

    protected $connection = 'mysql';
}
