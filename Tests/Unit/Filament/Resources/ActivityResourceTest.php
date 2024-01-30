<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

>>>>>>> 8d3d268 (Lint)
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
        $this->activityResource = new ActivityResource;
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->activityResource = new ActivityResource();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->activityResource = new ActivityResource;
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityResource);
    }

    public function testForm(): void
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

    public function testTable(): void
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

    public function testGetRelations(): void
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

    public function testGetPages(): void
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
