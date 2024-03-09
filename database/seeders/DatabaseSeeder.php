<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);
        // \App\Models\Role::create([
        //     'name' => 'admin',
        //     'email' => 'admin role',
        // ]);




        \App\Models\Role::create([
            'name' => 'admin',
            'description' => 'admin role',
        ]);
        \App\Models\Role::create([
            'name' => 'user',
            'description' => 'user role',
        ]);

        // poermissions

        \App\Models\Permission::create([
            'name' => 'add_user',
            'description' => 'user can add new user',
        ]);
        \App\Models\Permission::create([
            'name' => 'view_user',
            'description' => 'user can view',
        ]);

    }
}
