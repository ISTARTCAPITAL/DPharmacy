<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Roles();
        $role_user->name = 'Patient ';
        $role_user->description = 'A Patient';
        $role_user->save();

        $role_author = new Roles();
        $role_author->name = 'Doctor';
        $role_author->description = 'A Doctor';
        $role_author->save();

        $role_admin = new Roles();
        $role_admin->name = 'Pharmacist';
        $role_admin->description = 'A Pharmacist';
        $role_admin->save();

        $role_admin = new Roles();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Administrator';
        $role_admin->save();

    }
}
