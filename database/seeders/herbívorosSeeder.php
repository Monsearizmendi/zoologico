<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\herbívoros;
use Illuminate\Support\Facades\DB;

class herbívorosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=["La vaca", "el bisonte", "la jirafa", "el búfalo", "las orugas", "los pulgones","Los orangutanes"];
        $nombre_c=["Bos taurus","Bison","Giraffa camelopardalis","Bubalus bubalis"," Asphodelus fistulosus","Aphididae","Pongo"];
        $habitat=["campos","las praderas abiertas o semiabiertas"," todo tipo de ambientes de sabana"," bosques y sabanas del África","zonas boscosas"," aérea de la planta (hojas) o en la base de la planta","Se encuentra viviendo en estado salvaje exclusivamente en Sumatra y Borneo."];
        $alimento=["hojas de remolacha y de acelgas plantas de cereales paja de cereales alfalfa"," hierbas","hojas de acacia","pastos biches y considerados malezas","hojas"," se alimentan de las plantas gracias a un característico aparato bucal de tipo picador chupador"," fruta y hojas que recogen de los árboles de la selva"];
    
    
        for($i =0;$i<6;$i++)
        {
            DB::table('herbívoros')->insert([
            'Nombre' =>$nombre[$i],
            'Nombre_C' =>$nombre_c[$i],
            'Habitat' =>$habitat[$i],
            'Alimento' =>$alimento[$i]
            ]);
        }
    }
}
