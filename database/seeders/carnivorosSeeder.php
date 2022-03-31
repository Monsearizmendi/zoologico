<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\carnivoros;
use Illuminate\Support\Facades\DB;

class carnivorosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=["Leon","Cocodrilo","Tigre","Lobo","Gatos","Pumas","Perro","Ballena"];
        $nombre_c=["Panthera leo","Crocodylidae","Panthera tigris","Canis lupus","Felis catus","Puma concolor","Canis lupus familiaris","Balaenidae"];
        $habitat=["Habitan en las sabanas africanas y en una zona reducida del noreste de la India","Los cocodrilos son habitantes de pantanos, lagos y ríos, aunque algunas especies se dirigen a aguas salobres o al mar.","selvas tropicales, pastizales, sabanas e incluso manglares"," bosques de las montañas y los desiertos","El gato salvaje vive en bosques, y en lugares poco degradados y alejados de los núcleos urbanos","bosques nativos y cultivados, coironales, zonas cordilleranas andinas y algunas zonas montañosas costeras","casas o la calle ","viven en prácticamente todos los océanos del mundo"];
        $alimento=["pescado","pollo","res","cerdo"];

        for($i =0;$i<5;$i++)
                {
                    DB::table('carnivoros')->insert([
                    'Nombre' =>$nombre[$i],
                    'Nombre_C' =>$nombre_c[$i],
                    'Habitat' =>$habitat[$i],
                    'Alimento' =>$alimento[$i]
                    ]);
                }
    }
}
