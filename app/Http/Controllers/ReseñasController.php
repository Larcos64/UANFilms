<?php

namespace App\Http\Controllers;

use App\Models\Reseña;
use Illuminate\Http\Request;

class ReseñasController extends Controller
{
    public function message(Request $request)
    {
        try {  
            if($request->ajax()){
                
                $mensaje = $request->message;
                $mensaje_minus = strtolower($mensaje);
                $user_id = $request->user_id;
                $pelicula_id = $request->pelicula_id;
                
                $registro_reseña = new Reseña();
                $registro_reseña->user_id = $user_id;
                $registro_reseña->pelicula_id = $pelicula_id;
                $registro_reseña->resena = $mensaje_minus;
                $registro_reseña->save();
            }
			return response()->json([
				'status' => 200,
				'info' => $mensaje,
                'mensaje' => $mensaje,
			]);
		} catch (\Exception $er) {
			return response()->json([
				'status' => 500,
				'info' => 'Ocurrio un error en el servidor',
				'mensaje' => $er
			]);
		}
    }

    


}
