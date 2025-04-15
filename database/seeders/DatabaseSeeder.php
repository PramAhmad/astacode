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
    // craete dummmy for project and projject image
    Role::create(['name' => 'admin']);

    // User Seeder
   $user = User::create([
    'email' => 'admin@mail.test',
    'password' => bcrypt('password'),
    'name' => 'Admin',
    'role_id' => 1,
   ]);
//    assign role

    $user->assignRole('admin');
    }
}
