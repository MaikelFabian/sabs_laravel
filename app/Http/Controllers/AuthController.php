<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Persona;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    

    public function register(RegisterRequest $request):JsonResponse
    {
        $data = $request->validated();
        // Aquí puedes crear el usuario con los datos validados
        $data['contrasena'] = Hash::make($data['contrasena']);
        
        try{
            $user = Persona::create($data);
            return response()->json([
                'succes'    =>  true,
                'message'   =>  'Usuario creado correctamente',
                'data'      =>  $user
            ], Response::HTTP_CREATED)
            ->header('Location', route('users.show', $user));
            
        }catch(\Exception $e){
            Log::error('Error al crear el usuario', ['error'=> $e->getMessage()]);
            return response()->json([
                'success'   =>  false,
                'message'   =>  'Error al crear el usuario',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        };
    }
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
    'correo' => 'required|email',
    'password' => 'required|string',
]);


        try{
            if(!$token = auth('api')->attempt($credentials)){
                return response()->json([
                    'success'   =>  false,
                    'message'   =>  'Credenciales incorrectas'
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'success'       =>  true,
                'message'       =>  'Usuario autenticado correctamente',
                'data'          => [  
                    
                    'token_type'    =>  $token,
                    'access_token'  => true,
                    'expires_in'    =>  JWTAuth::factory()->getTTL() * 260 // Convertir a segundos  
                    
                ],
            ], Response::HTTP_OK);
        }catch(JWTException $e){
        Log::error('Error al generar el token', ['error' => $e->getMessage()]);
            return response()->json(
                [
                    
                'success'   =>  false,
                'message'   =>  'Error al generar el token',
                'error'     =>  $e->getMessage()
                
                ],
             Response::HTTP_INTERNAL_SERVER_ERROR);
        }  
        } 

    public function getUser(): JsonResponse
    {
        $user = auth('api')->user();
        if (!$user) {
            return response()->json(
                [
                    'success'   =>  false,
                    'message'   =>  'Usuario no autenticado',
                ],
             Response::HTTP_UNAUTHORIZED);
        }
        return response()->json(
            [
                'success'   =>  true,
                'message'   =>  'Usuario autenticado correctamente',
                'data'      =>  $user
            ],
         Response::HTTP_OK);
    }
        
    public function logout(): JsonResponse
    {
        auth('api')->logout();
        return response()->json(
            [ 
            'success'   =>  'Cerro sesión correctamente',
            ],
         Response::HTTP_NO_CONTENT);
    }

    
    
}