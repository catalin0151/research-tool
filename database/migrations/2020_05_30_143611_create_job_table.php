<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('job_posting_fallback')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('nice_to_have')->nullable();
            $table->longText('benefits')->nullable();
            $table->text('salary')->nullable();
            $table->boolean('remote')->default(false);
            $table->text('career_level');
            $table->bigInteger('company_id');
            $table->boolean('favorite')->default(false);
            $table->bigInteger('job_type');
            $table->string('job_url');
            $table->boolean('job_open')->default(true);
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
        Schema::dropIfExists('job');
    }
}
