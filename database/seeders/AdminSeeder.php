<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'adminstrator@audit.gov.gh',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $user->assignRole('super-admin');
    }
}
