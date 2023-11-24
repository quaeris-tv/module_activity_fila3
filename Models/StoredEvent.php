<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent as SpatieStoredEvent;
use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventCollection;
use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEventQueryBuilder;
use Spatie\SchemalessAttributes\SchemalessAttributes;

/**
 * Modules\Activity\Models\StoredEvent.
 *
 * @property \Spatie\EventSourcing\StoredEvents\ShouldBeStored|null $event
 * @property SchemalessAttributes                                   $meta_data
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

    /**
     * @var string
     */
    protected $connection = 'mysql';
}
