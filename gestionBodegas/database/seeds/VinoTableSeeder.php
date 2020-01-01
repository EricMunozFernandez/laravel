<?php

use Illuminate\Database\Seeder;

class VinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();

        for($i=0;$i<10;$i++){
            \Illuminate\Support\Facades\DB::table('vinos')->insert([
                'nombre'=>$faker->firstNameFemale,
                'descripcion'=>$faker->sentence,
                'anno'=>$faker->year,
                'tipo'=>$faker->randomElement(array('tinto','blanco','rosado','espumoso','dulce')),
                'bodega_id'=>$faker->numberBetween(0,10),
            ]);
        }
    }
}
