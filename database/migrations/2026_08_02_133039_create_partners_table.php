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
    Schema::create('partners', function (Blueprint $table) {
        $table->id();

        // Step 1 - Partner Information
        $table->string('name');
        $table->string('partner_type');
        $table->string('internal_code')->unique()->nullable();
        $table->enum('status', ['active', 'inactive', 'pending'])->default('active');
        $table->string('logo')->nullable();
        $table->string('website')->nullable();
        $table->string('linkedin')->nullable();
        $table->text('description')->nullable();
        $table->string('logo_link')->nullable();

        // Step 2 - Address
        $table->string('address_line1');
        $table->string('address_line2')->nullable();
        $table->string('city');
        $table->string('state')->nullable();
        $table->string('country');
        $table->string('postal_code')->nullable();

        // Step 3 - Contact
        $table->string('contact_name')->nullable();
        $table->string('contact_email')->nullable();
        $table->string('contact_phone')->nullable();
        $table->string('country_code',10)->nullable();

        // Contract
        $table->string('contract_start');
        $table->string('contract_end')->nullable();
        $table->string('contract_file')->nullable();
        $table->text('contract_notes')->nullable();

        $table->timestamps();
        $table->softDeletes();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
