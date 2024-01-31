<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateSnapshotsTable;
>>>>>>> 6398a7f (up)
=======
declare(strict_types=1);

namespace Tests\Unit;

>>>>>>> 8d3d268 (Lint)
use Tests\TestCase;

/**
 * Class CreateSnapshotsTableTest.
 *
 * @covers \CreateSnapshotsTable
 */
final class CreateSnapshotsTableTest extends TestCase
{
<<<<<<< HEAD
<<<<<<< HEAD
    private \CreateSnapshotsTable $createSnapshotsTable;

=======
    private CreateSnapshotsTable $createSnapshotsTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
    private \CreateSnapshotsTable $createSnapshotsTable;

>>>>>>> 8d3d268 (Lint)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new \CreateSnapshotsTable;
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new CreateSnapshotsTable();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
=======
        /* @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new \CreateSnapshotsTable;
    }

>>>>>>> 8d3d268 (Lint)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createSnapshotsTable);
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
