<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateSnapshotsTable;
>>>>>>> 6398a7f (up)
use Tests\TestCase;

/**
 * Class CreateSnapshotsTableTest.
 *
 * @covers \CreateSnapshotsTable
 */
final class CreateSnapshotsTableTest extends TestCase
{
<<<<<<< HEAD
    private \CreateSnapshotsTable $createSnapshotsTable;

=======
    private CreateSnapshotsTable $createSnapshotsTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new \CreateSnapshotsTable();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new CreateSnapshotsTable();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createSnapshotsTable);
    }

    public function testUp(): void
    {
<<<<<<< HEAD
        /* @todo This test is incomplete. */
=======
        /** @todo This test is incomplete. */
>>>>>>> 6398a7f (up)
        self::markTestIncomplete();
    }
}
