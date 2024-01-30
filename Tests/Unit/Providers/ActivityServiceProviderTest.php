<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

>>>>>>> 8d3d268 (Lint)
namespace Tests\Unit\Modules\Activity\Providers;

use Modules\Activity\Providers\ActivityServiceProvider;
use Tests\TestCase;

/**
 * Class ActivityServiceProviderTest.
 *
 * @covers \Modules\Activity\Providers\ActivityServiceProvider
 */
final class ActivityServiceProviderTest extends TestCase
{
    private ActivityServiceProvider $activityServiceProvider;

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
        $this->activityServiceProvider = new ActivityServiceProvider();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->activityServiceProvider = new ActivityServiceProvider();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->activityServiceProvider = new ActivityServiceProvider;
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->activityServiceProvider);
    }

    public function testBootCallback(): void
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

    public function testRegisterCallback(): void
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
