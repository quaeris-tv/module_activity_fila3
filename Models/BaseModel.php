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
     */
    public static bool $snakeAttributes = true;

    public bool $incrementing = true;

    public bool $timestamps = true;

    /**
<<<<<<< HEAD
     * @ var  bool
     */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'activity';

    /** @var array<string, string> */
    /** @var array<string, string> */
    protected $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var array<int, string> */
    protected $hidden = [
=======
     * @var array<string, string>
     */
    protected array $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];

    protected string $primaryKey = 'id';

    /**
     * @var array<int, string>
     */
    protected array $hidden = [
>>>>>>> 5ca6ed5 (Inline constructor default to property, Add return type declarations, and Redirect route to toRoute helper)
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
<<<<<<< HEAD
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
=======
>>>>>>> 5ca6ed5 (Inline constructor default to property, Add return type declarations, and Redirect route to toRoute helper)
     */
    protected static function newFactory(): Factory
    {
        return FactoryService::newFactory(static::class);
    }
}
