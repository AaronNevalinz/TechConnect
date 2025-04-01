<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('job_ops', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('company_id'); // Reference to the company/startup
            $table->string('location');
            $table->enum('job_type', ['full-time', 'part-time', 'contract', 'internship']);
            $table->decimal('salary', 10, 2)->nullable();
            $table->date('application_deadline');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('startups')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_ops');
    }
};
