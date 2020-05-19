<?php

use App\Wine;
use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker  = \Faker\Factory::create();

        for ($i=0; $i<50; $i++){
            Wine::create([
                'name'  => $faker->name,
                'description' => $faker->text(50),
                'color' => $faker->colorName,
                'grape_variety' => $faker->city,
                'country'   => $faker->countryCode
            ]);
        }
    }
}
