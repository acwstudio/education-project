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
        Schema::create('prof_classifiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prof_group_id');
            $table->unsignedInteger('prof_level_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug');
            $table->string('code');
            $table->string('isce-2011')->nullable();
            $table->string('isce-2013')->nullable();
            $table->boolean('active');
            $table->softDeletes();
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
        Schema::dropIfExists('prof_classifiers');
    }
};
