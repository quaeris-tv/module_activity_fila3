<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6398a7f (up)
namespace Modules\Activity\Tests\Unit\Database\Seeders;

use Modules\Activity\Database\Seeders\ActivityDatabaseSeeder;
use Tests\TestCase;

/**
 * Class ActivityDatabaseSeederTest.
 *
 * @covers \Modules\Activity\Database\Seeders\ActivityDatabaseSeeder
 */
final class ActivityDatabaseSeederTest extends TestCase
{
    private ActivityDatabaseSeeder $activityDatabaseSeeder;

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityDatabaseSeeder);
    }

    public function testRun(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }
}
