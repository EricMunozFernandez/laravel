<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker =Faker\Factory::create();

        for($i=0;$i<10;$i++){
            DB::table('articulos')->insert([
                'titulo'=>$faker->name,
                'subtitulo'=>$faker->realText(50,2),
                'cuerpo'=>$faker->realText(100,2),
            ]);
        }
    }
}
