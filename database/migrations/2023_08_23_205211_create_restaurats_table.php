<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurats', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('partita_iva', 11)->unique();
            $table->string('address', 50);
            $table->string('image')->nullable();
            $table->text('description', 65000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurats');
    }
};
