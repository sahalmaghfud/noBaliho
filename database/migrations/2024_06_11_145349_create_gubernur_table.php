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
        Schema::create('gubernurs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('ttl', 45);
            $table->string('agama', 45);
            $table->string('nama_w', 45);
            $table->string('ttl_w', 45);
            $table->enum('jeniskelamin_w', ['Laki-Laki', 'Perempuan']);
            $table->string('agama_w', 45);
            $table->unsignedBigInteger('idprovinsi');
            $table->text('visimisi')->nullable();
            $table->text('profil')->nullable();
            $table->text('program')->nullable();
            $table->string('facebook', 45)->nullable();
            $table->string('instagram', 45)->nullable();
            $table->string('twitter', 45)->nullable();
            $table->timestamps();
            $table->foreign('idprovinsi')->references('id')->on('provinsis')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gubernur');
    }
};
