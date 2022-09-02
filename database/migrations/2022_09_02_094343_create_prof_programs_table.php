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
        Schema::create('prof_programs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('organization_id');
            $table->unsignedInteger('prof_classifier_id');
            $table->boolean('is_moderated')->default(false);
            $table->boolean('is_published')->default(false);
            $table->string('name');
            $table->text('description');
            $table->string('slug')->unique();
            $table->unsignedInteger('price');
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
        Schema::dropIfExists('prof_programs');
    }
};
