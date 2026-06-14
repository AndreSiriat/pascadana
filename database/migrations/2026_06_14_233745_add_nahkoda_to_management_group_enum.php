<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            ALTER TABLE management
            MODIFY `group`
            ENUM('dewan','manajemen','nahkoda')
            NOT NULL
        ");
    }

    public function down(): void
    {
        DB::statement("
            ALTER TABLE management
            MODIFY `group`
            ENUM('dewan','manajemen')
            NOT NULL
        ");
    }
};