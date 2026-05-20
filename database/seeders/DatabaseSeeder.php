<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tables (reset auto-increment and remove all records)
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();

        // Call your seeders
        $this->call(TestUserSeeder::class);
        // $this->call(RandomUserSeeder::class);
        // $this->call(JobSeeder::class);

        // Optional: Keep the factory user if you want it alongside your seeders
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
