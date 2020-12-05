<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'admin';
        $admin->save();

        $user = new Role();
        $user->name = 'User';
        $user->slug = 'user';
        $user->save();

        $driver = new Role();
        $driver->name = 'Driver';
        $driver->slug = 'driver';
        $driver->save();
    }
}
