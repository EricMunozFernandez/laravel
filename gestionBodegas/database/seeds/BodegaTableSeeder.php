<?php

use Illuminate\Database\Seeder;

class BodegaTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('bodegas')->insert([
               'nombre'=>$faker->company,
                'direccion'=>$faker->address,
                'telefono'=>$faker->phoneNumber,
                'email'=>$faker->companyEmail,
                'personaContacto'=>$faker->name,
                'annoFundacion'=>$faker->year,
                'restaurante'=>$faker->boolean,
                'hotel'=>$faker->boolean,
            ]);
        }
    }
}
