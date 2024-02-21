<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateStoredEventsTable;
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

namespace Tests\Unit;

>>>>>>> 8d3d268 (Lint)
use Tests\TestCase;

/**
 * Class CreateStoredEventsTableTest.
 *
 * @covers \CreateStoredEventsTable
 */
final class CreateStoredEventsTableTest extends TestCase
{
<<<<<<< HEAD
<<<<<<< HEAD
    private \CreateStoredEventsTable $createStoredEventsTable;

=======
    private CreateStoredEventsTable $createStoredEventsTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
    private \CreateStoredEventsTable $createStoredEventsTable;

>>>>>>> 8d3d268 (Lint)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new \CreateStoredEventsTable;
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new CreateStoredEventsTable();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new \CreateStoredEventsTable();
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createStoredEventsTable);
    }

    public function testUp(): void
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
