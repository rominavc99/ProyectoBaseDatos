<?php

namespace Database\Seeders;
use App\Models\Elementos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elementos')->insert([
            'codigo' => '123',
            'descripcion' => 'leche',
            'cantidad' => '200',
            'precio' => '20'
        ]);
    }
}
