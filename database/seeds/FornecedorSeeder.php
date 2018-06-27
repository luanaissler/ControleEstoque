<?php

use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedores')->insert([
            'nome' => str_random(10),
            'cidade' => str_random(10),
            'endereco' => str_random(10),
            'contato' => str_random(10)
        ]);

        factory('App\Fornecedor', 5)->create();
    }
}
