<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('funding_rounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('startup_id');
            $table->decimal('amount_raised', 15, 2)->default(0.00);
            $table->decimal('target_amount', 15, 2);
            $table->string('status')->default('open');
            $table->string('round_type')->nullable(); // e.g. 'Seed', 'Series A'
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('startup_id')->references('id')->on('startups')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('funding_rounds');
    }
};
