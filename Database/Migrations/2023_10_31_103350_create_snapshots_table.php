<?php

declare(strict_types=1);

<<<<<<< HEAD
// namespace Modules\Activity\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class() extends XotBaseMigration {
=======
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateSnapshotsTable extends XotBaseMigration
{
>>>>>>> 82b3cf2 (.)
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->bigIncrements('id');
                $table->uuid('aggregate_uuid');
                $table->unsignedInteger('aggregate_version');
                $table->jsonb('state');
                $table->timestamps();
                $table->index('aggregate_uuid');
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
<<<<<<< HEAD
                // if (! $this->hasColumn('created_by')) {
                //    $table->string('created_by')->nullable();
                // }
                $this->updateTimestamps($table, false);
            }
        );
    }
};
=======
                //if (! $this->hasColumn('created_by')) {
                //    $table->string('created_by')->nullable();
                //    $table->string('updated_by')->nullable();
                //}
                $this->updateTimestamps($table,false);
            }
        );
    }
}
>>>>>>> 82b3cf2 (.)
