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
        Schema::create('job_batches', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Use UUIDs as Primary Keys
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->json('failed_job_ids')->nullable(); // Store failed job IDs as JSON
            $table->longText('options')->nullable();  // Options as long text for flexibility
            $table->unsignedInteger('created_at'); // Use unsigned integers for timestamps
            $table->unsignedInteger('cancelled_at')->nullable();
            $table->unsignedInteger('finished_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_batches');
    }
};
