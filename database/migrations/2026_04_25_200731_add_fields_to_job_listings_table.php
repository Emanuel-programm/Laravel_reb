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
            $table->unsignedBigInteger('user_id')->after('id');
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('job_type', [
                'Full-Time',
                'Part-Time',
                'Contract',
                'Temporary',
                'Internship',
                'Volunteer',
                'On-Call'
            ])->default('Full-Time');
            $table->boolean('remote')->default(false);
            $table->text('requirements')->nullable();
            $table->text('benefits')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('contact_email');
            $table->string('company_name');
            // ... other fields ...
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id', 'salary', 'tags', /*...*/]);
        });
    }
};
