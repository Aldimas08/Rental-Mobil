<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User;
        $admin->name = "Admin";
        $admin->email = "email@email.com";
        $admin->password = bcrypt('password');
        $admin->username = "admin";
        $admin->level = "admin";
        $admin->save();
    }
}
