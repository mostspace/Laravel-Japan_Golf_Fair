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
        Schema::create('company_temporaries', function (Blueprint $table) {
            $table->id('ct_id');
            $table->string('ct_name');
            $table->string('ct_name_kana');
            $table->string('ct_postal_code');
            $table->text('ct_address_1');
            $table->text('ct_address_2');
            $table->text('ct_address_3');
            $table->text('ct_address_4')->nullable();
            $table->string('ct_phone');
            $table->string('ct_representative_title');
            $table->string('ct_representative_name');
            $table->string('ct_staff_dept');
            $table->string('ct_staff_1_name');
            $table->string('ct_staff_1_email')->unique();
            $table->string('ct_staff_1_mobile');
            $table->string('ct_staff_2_name')->nullable();
            $table->string('ct_staff_2_email')->nullable()->unique();
            $table->string('ct_staff_2_mobile')->nullable();
            $table->string('ct_staff_fax')->nullable();
            $table->string('ct_website')->nullable();
            $table->string('ct_website_event')->nullable();
            $table->string('ct_products');
            $table->string('ct_jgga_member');
            $table->string('ct_previous_exhibitor');
            $table->string('ct_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_temporaries');
    }
};
