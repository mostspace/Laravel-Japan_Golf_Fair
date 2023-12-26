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
        Schema::create('company', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('c_name');
            $table->string('c_name_kana');
            $table->integer('c_postal_code');
            $table->text('c_address_1');
            $table->text('c_address_2');
            $table->text('c_address_3');
            $table->text('c_address_4');
            $table->string('c_phone');
            $table->string('c_representative_title');
            $table->string('c_representative_name');
            $table->string('c_staff_dept');
            $table->string('c_staff_1_name');
            $table->string('c_staff_1_email')->unique();
            $table->string('c_staff_1_mobile');
            $table->string('c_staff_2_name');
            $table->string('c_staff_2_email')->unique();
            $table->string('c_staff_2_mobile');
            $table->string('c_staff_fax');
            $table->string('c_website');
            $table->string('c_website_event');
            $table->string('c_products');
            $table->string('c_jgga_member');
            $table->string('c_previous_exhibitor');
            $table->string('c_latest_login')->nullable();
            $table->timestamp('c_created_at')->nullable();
            $table->timestamp('c_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
