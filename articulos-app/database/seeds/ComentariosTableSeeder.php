<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create();

        for($i=0;$i<50;$i++){
            DB::table('comentarios')->insert([
                'descripcion'=>$faker->text,
                'articulo_id'=>$faker->randomDigit(0-9),
            ]);
        }
    }
}
