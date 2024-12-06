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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\ShowTime::class)->index();
            $table->unsignedInteger('row');
            $table->unsignedInteger('column');
            $table->unsignedInteger('number');
            $table->string('type')->comment("'reserved', 'corridor', 'for_sale'");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
