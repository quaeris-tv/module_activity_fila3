<?php

declare(strict_types=1);

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

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->activityDatabaseSeeder = new ActivityDatabaseSeeder();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityDatabaseSeeder);
    }

    public function testRun(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
