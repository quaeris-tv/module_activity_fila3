<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

>>>>>>> 8d3d268 (Lint)
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
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
>>>>>>> 8d3d268 (Lint)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder;
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder;
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityDatabaseSeeder);
    }

    public function testRun(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
=======
        /* @todo This test is incomplete. */
>>>>>>> 8d3d268 (Lint)
        self::markTestIncomplete();
    }
}
