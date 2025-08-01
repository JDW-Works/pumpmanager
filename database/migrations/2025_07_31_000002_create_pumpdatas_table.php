<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pumpdatas', function (Blueprint $table) {
            $table->increments('pd_id');
            $table->text('pd_arg')->nullable();
            $table->integer('o_id');
            $table->string('pd_idno', 20);
            $table->string('pd_name', 20);
            $table->string('pd_proptyorg', 20)->nullable();
            $table->string('pd_mngorg', 20)->nullable();
            $table->timestamp('chCreateDate')->nullable();
            $table->timestamp('chUpdateDate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pumpdatas');
    }
};
