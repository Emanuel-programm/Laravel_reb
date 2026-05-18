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
        Schema::table('job_listings', function (Blueprint $table) {
            $table->string('address')->nullable()->after('state');
            $table->string('zipcode')->nullable()->after('address');
            $table->string('contact_phone')->nullable()->after('contact_email');
            $table->text('company_description')->nullable()->after('company_name');
            $table->string('company_logo')->nullable()->after('company_description');
            $table->string('company_website')->nullable()->after('company_logo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'zipcode',
                'contact_phone',
                'company_description',
                'company_logo',
                'company_website'
            ]);
        });
    }
};
