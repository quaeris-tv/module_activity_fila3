<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateActivityTable;
>>>>>>> 6398a7f (up)
use Tests\TestCase;

/**
 * Class CreateActivityTableTest.
 *
 * @covers \CreateActivityTable
 */
final class CreateActivityTableTest extends TestCase
{
<<<<<<< HEAD
    private \CreateActivityTable $createActivityTable;

=======
    private CreateActivityTable $createActivityTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function setUp(): void
    {
        parent::setUp();

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
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createActivityTable);
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
