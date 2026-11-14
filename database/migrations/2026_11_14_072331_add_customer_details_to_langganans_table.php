<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('langganans', function (Blueprint $table) {
            $table->string('nama')->after('product_id');
            $table->string('email')->after('nama');
            $table->string('no_telepon', 20)->after('email');
            $table->text('alamat')->after('no_telepon');
            $table->string('metode_pembayaran')->after('alamat');
        });
    }

    public function down(): void
    {
        Schema::table('langganans', function (Blueprint $table) {
            $table->dropColumn([
                'nama',
                'email',
                'no_telepon',
                'alamat',
                'metode_pembayaran',
            ]);
        });
    }
};
