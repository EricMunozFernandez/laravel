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

        for($i=0;$i<50;$i++){
            \Illuminate\Support\Facades\DB::table('vinos')->insert([
                'nombre'=>$faker->firstNameFemale,
                'descripcion'=>$faker->sentence,
                'anno'=>$faker->year,
                'alcohol'=>$faker->randomFloat(2,0,99),
                'tipo'=>$faker->randomElement(array('tinto','blanco','rosado','espumoso','dulce')),
                'bodega_id'=>$faker->numberBetween(0,10),
            ]);
        }
    }
}
