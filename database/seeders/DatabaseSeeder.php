<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
  

    // User Seeder
   $user = User::create([
    'email' => 'admin@mail.test',
    'password' => bcrypt('password'),
    'name' => 'Admin',
   ]);
//    assign role

    $user->assignRole('admin');
    }
}
