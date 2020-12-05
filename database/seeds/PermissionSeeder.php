<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageRole = new Permission();
        $manageRole->name = 'Manage roles';
        $manageRole->slug = 'manage-roles';
        $manageRole->save();

    }
}
