<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Usuario::factory(10)->create();
        \App\Models\Curso::factory(10)->create();
    }
}
