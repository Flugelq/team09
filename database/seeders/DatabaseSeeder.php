<?php

namespace Database\Seeders;

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

        $user = new User();
        $user->password = Hash::make('12345678');
        $user->email = 'admin@example.com';
        $user->name = 'Admin';
        $user->role = User::ROLE_ADMIN;
        $user->save();

        $user = new User();
        $user->password = Hash::make('12345678');
        $user->email = 'manager@example.com';
        $user->name = 'Manager';
        $user->role = User::ROLE_MANAGER;
        $user->save();

        $user = new User();
        $user->password = Hash::make('12345678');
        $user->email = 'user@example.com';
        $user->name = 'User';
        $user->role = User::ROLE_USER;
        $user->save();

        $this->call(SurveyStatisticsTableSeeder::class);
    }
}
