<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('status')->insert([['id' => 1, 'name' => 'Lost'], ['id' => 2, 'name' => 'Found'], ['id' => 3, 'name' => 'Delivered']]);
        DB::table('user_type')->insert([['id' => 1, 'name' => 'Student'], ['id' => 2, 'name' => 'Supervisor']]);
        DB::table('category')->insert([['id' => 1, 'name' => 'Category1'], ['id' => 2, 'name' => 'Category2']]);
        DB::table('campus')->insert([['id' => 1, 'name' => 'Campus1'], ['id' => 2, 'name' => 'Campus2']]);

        DB::table('users')->insert([[
            'name' => 'Supervisor',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('123456'),
            'user_type' => '2',
        ], [
            'name' => 'Student',
            'email' => 'student@example.com',
            'password' => Hash::make('123456'),
            'user_type' => '1',
        ]]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
