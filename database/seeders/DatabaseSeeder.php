<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        self::seedUsers();
    }

    public static function seedUsers(){
        User::truncate();
        $user = new User();
        $user->name = 'Pablo';
        $user->email = 'plajommj@hotmail.com';
        $user->password = '123456';
        $user->save();
    }
}
