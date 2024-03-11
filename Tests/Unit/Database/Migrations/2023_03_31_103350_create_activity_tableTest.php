<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateActivityTable;
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

namespace Tests\Unit;

>>>>>>> 8d3d268 (Lint)
use Tests\TestCase;

/**
 * Class CreateActivityTableTest.
 *
 * @covers \CreateActivityTable
 */
final class CreateActivityTableTest extends TestCase
{
<<<<<<< HEAD
<<<<<<< HEAD
    private \CreateActivityTable $createActivityTable;

=======
    private CreateActivityTable $createActivityTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
    private \CreateActivityTable $createActivityTable;

>>>>>>> 8d3d268 (Lint)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->createActivityTable = new \CreateActivityTable();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->createActivityTable = new CreateActivityTable();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->createActivityTable = new \CreateActivityTable();
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createActivityTable);
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
