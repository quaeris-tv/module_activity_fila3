<?php

declare(strict_types=1);

namespace Modules\Activity\Tests\Unit\Filament\Resources;

use Modules\Activity\Filament\Resources\ActivityResource;
use Tests\TestCase;

/**
 * Class ActivityResourceTest.
 *
 * @covers \Modules\Activity\Filament\Resources\ActivityResource
 */
final class ActivityResourceTest extends TestCase
{
    private ActivityResource $activityResource;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->activityResource = new ActivityResource();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityResource);
    }

    public function testForm(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTable(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetRelations(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetPages(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
