<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateSnapshotsTableTest.
 *
 * @covers \CreateSnapshotsTable
 */
final class CreateSnapshotsTableTest extends TestCase
{
    private \CreateSnapshotsTable $createSnapshotsTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new \CreateSnapshotsTable();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createSnapshotsTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
