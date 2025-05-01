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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('password');
            $table->string('mobile');
            $table->string('email');
            $table->string('whatsapp');
            $table->enum('gender', ['male','female'])->default('male');
            $table->string('freeze');
            $table->string('photo');
            $table->foreignId('revenue_id')->nullable()->constrained(table: 'revenues')->cascadeOnDelete();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
