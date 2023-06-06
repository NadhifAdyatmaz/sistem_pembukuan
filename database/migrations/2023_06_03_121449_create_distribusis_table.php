<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mysql2')->create('distribusis', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('produk_id'); 
            $table->date('tanggal');
            $table->string('status');
            $table->bigInteger('jumlah');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('distribusis');
    }
};
