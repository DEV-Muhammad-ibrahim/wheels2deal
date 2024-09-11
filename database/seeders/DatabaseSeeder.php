<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Permission::create(['name' => 'UserCanCreate', 'description' => 'This permission is required to create any product']);
        Permission::create(['name' => 'UserCanEdit', 'description' => 'This permission is required to edit any product']);
        Permission::create(['name' => 'UserCanUpdate', 'description' => 'This permission is required to update any product']);
        Permission::create(['name' => 'UserCanDelete', 'description' => 'This permission is required to delete any product']);
        Role::create(['name' => 'user', 'description' => 'Regular User']);
        Role::create(['name' => 'admin', 'description' => 'Adminstrator']);
        Role::create(['name' => 'moderator', 'description' => 'Moderator']);
    }
}
