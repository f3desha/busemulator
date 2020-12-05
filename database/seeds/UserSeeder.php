<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $manageRoles = Permission::where('slug','manage-roles')->first();

        $user1 = new User();
        $user1->name = 'Admin';
        $user1->email = 'admin@admin.com';
        $user1->password = bcrypt('password');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($manageRoles);
    }
}
