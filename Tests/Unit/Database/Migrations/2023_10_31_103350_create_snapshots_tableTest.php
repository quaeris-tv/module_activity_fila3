<?php

namespace Tests\Unit;

use CreateSnapshotsTable;
use Tests\TestCase;

/**
 * Class CreateSnapshotsTableTest.
 *
 * @covers \CreateSnapshotsTable
 */
final class CreateSnapshotsTableTest extends TestCase
{
    private CreateSnapshotsTable $createSnapshotsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createSnapshotsTable = new CreateSnapshotsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createSnapshotsTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
