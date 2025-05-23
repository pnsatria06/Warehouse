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
        Schema::create('warehouse_settings', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_name');
            $table->string('city');
            $table->text('address');
            $table->string('acontact_telephone');
            $table->string('email');
            $table->string('manager');
            $table->string('valid');
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
