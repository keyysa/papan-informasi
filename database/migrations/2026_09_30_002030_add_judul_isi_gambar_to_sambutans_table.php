<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sambutans', function (Blueprint $table) {
            $table->string('judul')->after('id');
            $table->text('isi')->after('judul');
            $table->string('gambar')->nullable()->after('isi');
        });
    }

    public function down(): void
    {
        Schema::table('sambutans', function (Blueprint $table) {
            $table->dropColumn([
                'judul',
                'isi',
                'gambar',
            ]);
        });
    }
};