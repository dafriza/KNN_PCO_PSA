<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // User
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'read user']);

        // PCO
        Permission::create(['name' => 'create PCO']);
        Permission::create(['name' => 'update PCO']);
        Permission::create(['name' => 'delete PCO']);
        Permission::create(['name' => 'read PCO']);

        // PSA
        Permission::create(['name' => 'create PSA']);
        Permission::create(['name' => 'update PSA']);
        Permission::create(['name' => 'delete PSA']);
        Permission::create(['name' => 'read PSA']);

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo('create PCO');
        $user->givePermissionTo('update PCO');
        $user->givePermissionTo('delete PCO');
        $user->givePermissionTo('read PCO');

        $user->givePermissionTo('create PSA');
        $user->givePermissionTo('update PSA');
        $user->givePermissionTo('delete PSA');
        $user->givePermissionTo('read PSA');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create user');
        $admin->givePermissionTo('read user');
        $admin->givePermissionTo('update user');
        $admin->givePermissionTo('delete user');
    }
}
