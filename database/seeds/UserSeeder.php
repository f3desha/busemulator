<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        $driver = Role::where('slug','driver')->first();
        $regularUser = Role::where('slug','user')->first();

        $user1 = new User();
        $user1->name = 'Admin';
        $user1->email = 'admin@admin.com';
        $user1->password = bcrypt('password');
        $user1->save();
        $user1->roles()->attach($admin);

        $user2 = new User();
        $user2->name = 'Driver';
        $user2->email = 'driver@admin.com';
        $user2->password = bcrypt('driver');
        $user2->save();
        $user2->roles()->attach($driver);

        $user3 = new User();
        $user3->name = 'Regular';
        $user3->email = 'user@admin.com';
        $user3->password = bcrypt('regular');
        $user3->save();
        $user3->roles()->attach($regularUser);

    }
}
