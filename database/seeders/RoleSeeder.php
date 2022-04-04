<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin    = Role::create(['name' => 'super-admin']);
        $admin          = Role::create(['name' => 'admin']);
        $producer       = Role::create(['name' => 'producer']);
        $user           = Role::create(['name' => 'user']);

        $user_permisions = [
            Permission::create(['name' => 'create user']),
            Permission::create(['name' => 'read user']),
            Permission::create(['name' => 'update user']),
            Permission::create(['name' => 'delete user']),
        ];

        $admin->syncPermissions($user_permisions);
    }
}
