<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE clients ENABLE ROW LEVEL SECURITY');
        DB::statement('ALTER TABLE client_photos ENABLE ROW LEVEL SECURITY');
        DB::statement('ALTER TABLE payments ENABLE ROW LEVEL SECURITY');
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE clients DISABLE ROW LEVEL SECURITY');
        DB::statement('ALTER TABLE client_photos DISABLE ROW LEVEL SECURITY');
        DB::statement('ALTER TABLE payments DISABLE ROW LEVEL SECURITY');
    }
};
