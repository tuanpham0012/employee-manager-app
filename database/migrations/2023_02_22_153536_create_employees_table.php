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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20);
            $table->string('name', 150);
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->string('title', 200);
            $table->date('date_of_birth');
            $table->tinyInteger('gender')->default(0);
            $table->string('cmnd', 15)->nullable();
            $table->date('license_date');
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('address', 225)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('landline_phone', 15)->nullable();
            $table->string('email', 225)->nullable();
            $table->string('bank_number', 15)->nullable();
            $table->foreignId('bank_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('bank_branch', 225)->nullable();
            $table->boolean('is_customer')->default(0);
            $table->boolean('is_supplier')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
