<?php

namespace Tests\Unit;

use CreateStoredEventsTable;
use Tests\TestCase;

/**
 * Class CreateStoredEventsTableTest.
 *
 * @covers \CreateStoredEventsTable
 */
final class CreateStoredEventsTableTest extends TestCase
{
    private CreateStoredEventsTable $createStoredEventsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createStoredEventsTable = new CreateStoredEventsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createStoredEventsTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
