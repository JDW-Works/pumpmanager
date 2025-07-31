<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('userdatas', function (Blueprint $table) {
            $table->id();
            $table->string('u_idno', 15)->unique();
            $table->string('u_name', 20);
            $table->string('u_passwd', 15);
            $table->string('u_org', 20)->nullable();
            $table->string('u_auth', 5)->nullable();
            $table->text('u_mail')->nullable();
            $table->string('c_name', 20)->nullable();
            $table->string('c_tel', 50)->nullable();
            $table->text('u_company')->nullable();
            $table->string('u_status', 5)->default('1');
            $table->timestamp('chCreateDate')->nullable();
            $table->timestamp('chUpdateDate')->nullable();
            $table->string('nextAgency', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('userdatas');
    }
};
