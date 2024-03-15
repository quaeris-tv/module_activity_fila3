<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6398a7f (up)
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
        $this->activityResource = new ActivityResource();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->activityResource = new ActivityResource();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityResource);
    }

    public function testForm(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }

    public function testTable(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }

    public function testGetRelations(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }

    public function testGetPages(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }
}
