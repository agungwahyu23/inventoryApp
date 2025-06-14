<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'sarpras']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'kepsek']);

        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@demo.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('admin');
    }
}
