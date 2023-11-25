<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Idioma;


class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory()->count(100)->create()->each(function ($alumno){
                $numero_idiomas = rand(1,3);
                $idiomas =['Francés',"Inglés",'Alemán','Portugués','Rumano','Catalán','Vasco','Valenciano','Gallego'];
                $posiciones= array_rand($idiomas, $numero_idiomas);
                $posiciones=is_array($posiciones) ? $posiciones: [$posiciones];
                for ($n = 0; $n < $numero_idiomas; $n++) {
                    $idioma = new Idioma();
                    $idioma->alumno_id = $alumno->id;
                    $idioma->idioma = $idiomas[$posiciones[$n]];
                    $idioma->save();
                }
        });
    }
}

