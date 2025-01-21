<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

/**
 * Class Activity.
 *
 * This class extends the BaseActivity model to represent activities in the application.
 *
 * @mixin \Eloquent
 */
class Activity extends BaseActivity
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'log_name',
        'description',
        'subject_type',
        'event',
        'subject_id',
        'causer_type',
        'causer_id',
        'properties',
        'batch_uuid',
        'created_at',
        'updated_at',
    ];

    protected string $connection = 'activity';

    // Additional methods or relationships can be defined here as needed
}
