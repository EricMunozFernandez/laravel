<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
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
            DB::table('usuarios')->insert([
                'email'=>$faker->email,
                'descripcion'=>$faker->realText(100,2),
            ]);
        }
    }
}
