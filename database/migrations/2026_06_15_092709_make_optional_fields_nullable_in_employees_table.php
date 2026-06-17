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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('contact_number')->nullable()->change();
            $table->string('department')->nullable()->change();
            $table->date('date_hired')->nullable()->change();
            $table->string('status')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('contact_number')->nullable(false)->change();
            $table->string('department')->nullable(false)->change();
            $table->date('date_hired')->nullable(false)->change();
            $table->string('status')->nullable(false)->change();
        });
    }
};