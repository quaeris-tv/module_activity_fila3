<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Tests\Unit;

=======
namespace Tests\Unit;

use CreateStoredEventsTable;
>>>>>>> 6398a7f (up)
use Tests\TestCase;

/**
 * Class CreateStoredEventsTableTest.
 *
 * @covers \CreateStoredEventsTable
 */
final class CreateStoredEventsTableTest extends TestCase
{
<<<<<<< HEAD
    private \CreateStoredEventsTable $createStoredEventsTable;

=======
    private CreateStoredEventsTable $createStoredEventsTable;

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        /* @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new \CreateStoredEventsTable();
    }

=======
        /** @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new CreateStoredEventsTable();
    }

    /**
     * {@inheritdoc}
     */
>>>>>>> 6398a7f (up)
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createStoredEventsTable);
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
