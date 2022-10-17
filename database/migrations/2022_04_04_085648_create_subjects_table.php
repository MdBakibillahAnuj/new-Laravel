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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('teacher_id');
            $table->string('title');
            $table->string('code');
            $table->integer('fee');
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('hit_count')->default(0);
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
        Schema::dropIfExists('subjects');
    }
};
