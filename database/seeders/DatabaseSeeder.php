<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
public function run()
{
    
    Persona::create([
        'identificacion' => 1234567890,
        'nombre' => 'Carlos',
        'apellido' => 'Sterling',
        'telefono' => '123456789',
        'correo' => 'carlos@dominio.com',
        'contrasena' => Hash::make('carlos1234'), 
        'edad' => 30,
        'activo' => true,
    ]);

}}