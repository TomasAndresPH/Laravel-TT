<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'rut' => '12345689-9'],
            ['nombre' => 'María', 'apellido' => 'González', 'rut' => '62467344-4'],
            ['nombre' => 'Carlos', 'apellido' => 'Soto', 'rut' => '23434155-1'],
            ['nombre' => 'Ana', 'apellido' => 'Fernández', 'rut' => '34576892-7'],
            ['nombre' => 'Pedro', 'apellido' => 'Martínez', 'rut' => '78654321-3'],
            ['nombre' => 'Sofía', 'apellido' => 'Araya', 'rut' => '12398745-2'],
            ['nombre' => 'Luis', 'apellido' => 'Castro', 'rut' => '98765432-1'],
            ['nombre' => 'Camila', 'apellido' => 'Vega', 'rut' => '43567219-5'],
            ['nombre' => 'Francisco', 'apellido' => 'Espinoza', 'rut' => '56893412-6'],
            ['nombre' => 'Valentina', 'apellido' => 'Carrasco', 'rut' => '67234891-8'],
            ['nombre' => 'Javier', 'apellido' => 'López', 'rut' => '34876521-0'],
            ['nombre' => 'Fernanda', 'apellido' => 'Rojas', 'rut' => '81234976-3'],
            ['nombre' => 'Diego', 'apellido' => 'Hernández', 'rut' => '65873421-6'],
            ['nombre' => 'Paula', 'apellido' => 'Morales', 'rut' => '97834562-4'],
            ['nombre' => 'Andrés', 'apellido' => 'Ramírez', 'rut' => '12456789-3'],
            ['nombre' => 'Daniela', 'apellido' => 'Navarro', 'rut' => '65748392-5'],
            ['nombre' => 'Gonzalo', 'apellido' => 'Cortés', 'rut' => '75893412-7'],
            ['nombre' => 'Isabel', 'apellido' => 'Figueroa', 'rut' => '34987562-8'],
            ['nombre' => 'Matías', 'apellido' => 'Paredes', 'rut' => '93485671-2'],
            ['nombre' => 'Antonia', 'apellido' => 'Silva', 'rut' => '75698342-9'],
            ['nombre' => 'Rodrigo', 'apellido' => 'Gutiérrez', 'rut' => '98342157-5'],
            ['nombre' => 'Claudia', 'apellido' => 'Salinas', 'rut' => '56873941-3'],
            ['nombre' => 'Tomás', 'apellido' => 'Campos', 'rut' => '87456392-6'],
            ['nombre' => 'Laura', 'apellido' => 'Fuentes', 'rut' => '34918765-4'],
            ['nombre' => 'Cristian', 'apellido' => 'Álvarez', 'rut' => '78934125-1'],
            ['nombre' => 'Javiera', 'apellido' => 'Muñoz', 'rut' => '56873241-8'],
            ['nombre' => 'Felipe', 'apellido' => 'Reyes', 'rut' => '76432918-9'],
            ['nombre' => 'Florencia', 'apellido' => 'Vergara', 'rut' => '98345671-0'],
            ['nombre' => 'Sebastián', 'apellido' => 'Contreras', 'rut' => '12456987-2'],
            ['nombre' => 'Francisca', 'apellido' => 'Ortiz', 'rut' => '34219876-6'],
            ['nombre' => 'Hugo', 'apellido' => 'Sandoval', 'rut' => '78345219-4'],
            ['nombre' => 'Gabriela', 'apellido' => 'Aguilera', 'rut' => '96342581-7'],
            ['nombre' => 'Mauricio', 'apellido' => 'Escobar', 'rut' => '34987621-3'],
            ['nombre' => 'Carolina', 'apellido' => 'Lagos', 'rut' => '78123456-5'],
            ['nombre' => 'Vicente', 'apellido' => 'Tapia', 'rut' => '56213489-8'],
            ['nombre' => 'Rocío', 'apellido' => 'Vargas', 'rut' => '87564329-0'],
            ['nombre' => 'Nicolás', 'apellido' => 'Valenzuela', 'rut' => '45987321-4'],
            ['nombre' => 'Catalina', 'apellido' => 'Mendoza', 'rut' => '98764312-9'],
            ['nombre' => 'Ricardo', 'apellido' => 'Rivera', 'rut' => '73489125-7'],
            ['nombre' => 'Paz', 'apellido' => 'Olivares', 'rut' => '67293841-6'],
            ['nombre' => 'Emilio', 'apellido' => 'Sepúlveda', 'rut' => '98321476-1'],
            ['nombre' => 'Mónica', 'apellido' => 'Carvajal', 'rut' => '12457893-5'],
            ['nombre' => 'Martín', 'apellido' => 'Leiva', 'rut' => '84567293-3'],
            ['nombre' => 'Francis', 'apellido' => 'Bustamante', 'rut' => '93412587-2'],
            ['nombre' => 'Renata', 'apellido' => 'Cuevas', 'rut' => '67129384-9'],
            ['nombre' => 'Álvaro', 'apellido' => 'Saavedra', 'rut' => '84573692-8'],
            ['nombre' => 'Josefina', 'apellido' => 'Barros', 'rut' => '34987612-6'],
            ['nombre' => 'Maximiliano', 'apellido' => 'Peña', 'rut' => '67238941-5'],
            ['nombre' => 'Daniel', 'apellido' => 'Godoy', 'rut' => '23498765-4'],
            ['nombre' => 'Agustina', 'apellido' => 'Venegas', 'rut' => '73481259-7']
        ];

        foreach ($usuarios as $usuario) {
            DB::table('usuarios')->insert([
                'nombre' => $usuario['nombre'],
                'apellido' => $usuario['apellido'],
                'rut' => $usuario['rut'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
