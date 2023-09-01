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
        Schema::create('employee__k_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('employee_kpi_id');
            $table->string('employee_id');
            $table->string('kpi_id');
            $table->string('value');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee__k_p_i_s');
    }
};
