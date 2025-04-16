<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pessoa = Pessoa::create([
            'nome' => 'João',
            'idade' => 25,
            'cpf' => '12345678900'
        ]);

        Perfil::create([
            'bio' => '',
            'pessoa_id' => 1
        ]);
    }
}
