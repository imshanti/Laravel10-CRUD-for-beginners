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
        Schema::create('fee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('class');
            $table->integer('roll');
            $table->string('payment_method');
            $table->double('amount');
            $table->date('payment_date');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
