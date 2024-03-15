<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // use Cachable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /**
     * @ var  bool
     */
    public $incrementing = true;

    /** @var bool */
<<<<<<< HEAD
    public $timestamps = true;
    
=======
    public $timestamps
     = true;

>>>>>>> 7a2bf3a (Dusting)
    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'activity';

    /** @var array<string, string> */
    protected $casts = [
        'published_at' => 'datetime', 
        'created_at' => 'datetime', 
        'updated_at' => 'datetime'
    ];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var array<int, string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
    }
}
