<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function submit (Request $datos){
        $Nombre = $datos->name;

        // -- consumir api de nacion
        $cliente =new \GuzzHttp\Client();
        $response = $cliente ->request('GET','aqui va un link'.$Nombre);
        $datos =json_decode($response->getBody()->getContents(),true);

        //recorrer elementos
        $resultados = [];

        foreach ($datos['country'] as $nacion) {
            $resultados[] = [
                'id' => $nacion ['country_id'],
                'probabilidades' => $nacion['probabilidad']
            
            ];
        }
    }
}
