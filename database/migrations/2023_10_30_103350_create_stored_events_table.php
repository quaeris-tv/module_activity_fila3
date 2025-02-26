<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->uuid('aggregate_uuid')->nullable();
                $table->unsignedBigInteger('aggregate_version')->nullable();
                $table->unsignedTinyInteger('event_version')->default(1);
                $table->string('event_class');
                $table->jsonb('event_properties');
                $table->jsonb('meta_data');
                $table->timestamp('created_at');
                $table->index('event_class');
                $table->index('aggregate_uuid');
                $table->unique(['aggregate_uuid', 'aggregate_version']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, false);
            }
        );
    }
};
