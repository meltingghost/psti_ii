<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Inicio',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Registro',
                'route' => 'registro.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Control de Asistencia',
                'route' => 'control.index',
                'ordering' => 3,
            ],
            [
                'name' => 'Permisos',
                'route' => 'permisos.index',
                'ordering' => 4,
            ]
            ];
            foreach ($links as $key => $navbar) {
                Navbar::create($navbar);
            }
    }
}
