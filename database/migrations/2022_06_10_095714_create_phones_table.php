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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('model_number');
            $table->string('description');
            $table->foreignId('operation_system_id')->nullable()->constrained();
            $table->foreignId('processor_id')->nullable()->constrained();
            $table->foreignId('color_id')->nullable()->constrained();
            $table->foreignId('brand_id')->nullable()->constrained();
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
        Schema::dropIfExists('phones');
    }
};
