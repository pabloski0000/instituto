<?php

namespace Database\Seeders;

use App\Http\Resources\PeriodoclaseResource;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Periodoclase;

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
        self::seedPeriodoclase();
    }

    public static function seedUsers(){
        User::truncate();
        $user = new User();
        $user->name = 'Pablo';
        $user->email = 'plajommj@hotmail.com';
        $user->password = '123456';
        $user->save();
    }

    public static function seedPeriodoclase(){
        Periodoclase::truncate();
        $periodoclase = new Periodoclase();
        $periodoclase->id = '99';
        $periodoclase->save();
        $periodoclase = new Periodoclase();
        $periodoclase->id = '98';
        $periodoclase->save();
    }
}
