<?php

namespace Database\Seeders;

use App\Models\Roles;
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
        // $role_admin = new Roles();
        // $role_admin->name = 'Admin';
        // $role_admin->save();

        $role_user = new Roles();
        $role_user->name = 'Patient ';
        $role_user->save();

        $role_author = new Roles();
        $role_author->name = 'Doctor';
        $role_author->save();

        $role_admin = new Roles();
        $role_admin->name = 'Pharmacist';
        $role_admin->save();
    }
}
