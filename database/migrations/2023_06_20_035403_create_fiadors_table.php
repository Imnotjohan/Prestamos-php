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
        Schema::create('fiadors', function (Blueprint $table) {
            $table->bigInteger("id")->unsigned()->primary();
            $table->foreign("id")->references("id")->on("personas")->onDelete("cascade");
            $table->string("nombre");
            $table->string("parentesco");
            $table->string("telefono");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiadors');
    }
};
