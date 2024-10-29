<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enum\UserRoles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create(
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]
        );
        User::factory()->create(
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'test',
                'user_role' => UserRoles::Admin->value
            ]
        );
        User::factory()->create(
            [
                'name' => 'Support User',
                'email' => 'support@example.com',
                'user_role' => UserRoles::Support->value
            ]
        );
        User::factory()->create(
            [
                'name' => 'Editor User',
                'email' => 'editor@example.com',
                'user_role' => UserRoles::Editor->value
            ],
        );

        $this->call([
            TicketsSeeder::class,
        ]);

        
    }
}
