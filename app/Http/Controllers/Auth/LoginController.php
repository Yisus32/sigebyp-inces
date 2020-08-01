<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;


class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [

            'email' => 'email|string|required',
            'password' => 'string|required'
        ]);

        //¿por qué retorna siempre falso? (Modifiqué el archivo config/auth.php y vendor/laravel/Illuminate/Foundation/Auth/AuthenticatesUser.php)
        //R: Porque la contraseña debe estar encriptada. (Desarrollar un trigger que haga eso automáticamente (Ya funciona))
        if(Auth::attempt($credentials))
        {
        	return redirect()->route('dashboard');
        }

        return back()
            ->withErrors(['email'=>trans('auth.failed')]) //Notifica dinámicamente que las credenciales no concuerdan con los registros de la BD
            ->withInput(request(['email'])); //Mantiene en el input el correo que el usuario colocó
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}

//Ojo a los archivos que se modificaron, para realizar el login personalizado.

