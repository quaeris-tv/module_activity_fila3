<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateActivityTableTest.
 *
 * @covers \CreateActivityTable
 */
final class CreateActivityTableTest extends TestCase
{
    private \CreateActivityTable $createActivityTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createActivityTable = new \CreateActivityTable();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createActivityTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
