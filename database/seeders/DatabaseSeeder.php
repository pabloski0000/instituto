<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grupo;
use App\Models\Matricula;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::factory(10)->create();

        Grupo::truncate();
        Grupo::factory(20)->create();

        Matricula::truncate();
        Matricula::factory(15)->create();
    }

}
