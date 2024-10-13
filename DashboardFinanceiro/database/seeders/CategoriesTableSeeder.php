<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Seeder para alimentar a tabela de categorias
     */
    public function run(): void
    {
        $categories = [
            // Categorias de Receita
            ['name' => 'Eventos Culturais', 'type' => 'income'],
            ['name' => 'Esportes', 'type' => 'income'],
            ['name' => 'Educação', 'type' => 'income'],
            ['name' => 'Entretenimento', 'type' => 'income'],
            ['name' => 'Viagens', 'type' => 'income'],
            ['name' => 'Gastronomia', 'type' => 'income'],
            ['name' => 'Saúde e Bem-Estar', 'type' => 'income'],

            // Categorias de Despesa
            ['name' => 'Aluguel', 'type' => 'expense'],
            ['name' => 'Água', 'type' => 'expense'],
            ['name' => 'Luz', 'type' => 'expense'],
            ['name' => 'Gás', 'type' => 'expense'],
            ['name' => 'Telefone', 'type' => 'expense'],
            ['name' => 'Internet', 'type' => 'expense'],
            ['name' => 'Cartões de Crédito', 'type' => 'expense'],
            ['name' => 'IPTU', 'type' => 'expense'],
            ['name' => 'Débidos de Veículo', 'type' => 'expense'],
            ['name' => 'Combustível', 'type' => 'expense'],
            ['name' => 'Seguro do Carro', 'type' => 'expense'],
            ['name' => 'Despesas com Saúde', 'type' => 'expense'],
            ['name' => 'Alimentação', 'type' => 'expense'],
            ['name' => 'Transporte', 'type' => 'expense'],
            ['name' => 'Impostos e Taxas', 'type' => 'expense'],
        ];

        DB::table('categories')->insert($categories);
    }
}
