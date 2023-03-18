<?php

namespace App\Http\Controllers;

use App\Models\Reseña;
use Illuminate\Http\Request;

class ReseñasController extends Controller
{
    public function message(Request $request)
    {
        dd('hola');

        
        try {
			
            $user_id = Auth()->user()->id;
            if($request->ajax()){
                
                $message_active = $request->message_active;
                $mensaje = $request->message;
                if ($message_active == 'true') {
                    $message = 1;
                }else{
                    $message = 0;
                }
                $registro_message = new Reseña();
                $registro_message->user_id = $user_id;
                $registro_message->message_active = $message;
                $registro_message->message = $mensaje;
                $registro_message->save();
            }
			return response()->json([
				'status' => 200,
				'info' => $message,
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
