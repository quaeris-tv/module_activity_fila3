<?php

namespace Tests\Unit;

use CreateActivityTable;
use Tests\TestCase;

/**
 * Class CreateActivityTableTest.
 *
 * @covers \CreateActivityTable
 */
final class CreateActivityTableTest extends TestCase
{
    private CreateActivityTable $createActivityTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createActivityTable = new CreateActivityTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createActivityTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
