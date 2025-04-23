<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Aluno::create([
            'nome' => 'João Silva',
            'cpf' => '12345678900',
            'email' => 'joao@joao',
            'telefone' => '122212'
        ]);

        Role::create([
            'titulo' => 'Aluno'
        ]);
    }
}
