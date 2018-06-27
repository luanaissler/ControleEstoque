<?php

use Illuminate\Database\Seeder;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        DB::table('estoques')->insert([
            'nome' => str_random(10)
        ]);

        factory('App\Estoque', 5)->create();
    }

}
