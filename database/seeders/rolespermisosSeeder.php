<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolespermisosSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles_permisos')->insert([
            ['rol_id' => 5, 'permiso_id' => 10],
            ['rol_id' => 6, 'permiso_id' => 11],
            ['rol_id' => 5, 'permiso_id' => 12],
        ]);
    }
}
