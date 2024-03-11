<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateStoredEventsTableTest.
 *
 * @covers \CreateStoredEventsTable
 */
final class CreateStoredEventsTableTest extends TestCase
{
    private \CreateStoredEventsTable $createStoredEventsTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new \CreateStoredEventsTable();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createStoredEventsTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
