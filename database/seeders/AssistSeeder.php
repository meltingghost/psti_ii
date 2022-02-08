<?php

namespace Database\Seeders;

use App\Models\Assist;

use Illuminate\Database\Seeder;

class AssistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assist::factory(40)->create();
    }
}
