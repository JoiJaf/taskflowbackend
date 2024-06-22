<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserSpecific;
use App\Models\UserLevel;


class UserSpecificController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function SingIn(Request $request){

    try{

        //Permite obtener datos específicos enviados por POST
        $data = $request->only(['username', 'emailAddress', 'password']);

        $user = new UserSpecific();
        $user->email = $data['emailAddress'];
        $user->user_name = $data['username'];
        $user->password = bcrypt($data['password']);
        $user->user_level_id = 1;
        $user->save();

        return response()->json(['mensaje' => 'Usuario creado exitosamente','usuario' => $user], 201); // Código de estado 201: Creado

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }

    public function Login(Request $request){

        //Permite obtener datos específicos enviados por POST
        $data = $request->only(['username', 'password']);

        UserSpecific::where('user_name', $data['username'])->firstOrFail();

        return response()->json(['mensaje' => 'Usuario logueado exitosamente'], 200); // Código de estado 200: OK

    }

}
