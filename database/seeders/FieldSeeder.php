<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::factory()->count(5000)->create();
//        factory(App\Domains\Auth\Models\Field::class, 2500)->create();
    }
}
