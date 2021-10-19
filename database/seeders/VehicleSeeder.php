<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = Carbon::now();
        $vehicles = array(['description' => 'Gol 1.0 GTI Preto', 'price' => 10000.00, 'created_at' => $created_at],
                          ['description' => 'Palio 1.0 Fire Amarelo', 'price' => 25000.00, 'created_at' => $created_at],
                          ['description' => 'Frontier 3.3 Prata', 'price' => 90000.00, 'created_at' => $created_at],
                          ['description' => 'Amarok 4x4 Azul', 'price' => 10000.00, 'created_at' => $created_at]);
        DB::table('vehicles')->insert($vehicles);
    }
}
