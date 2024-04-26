<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetusersController extends Controller
{

    public function index(){

    $user = Http::get('http://plataforma-arrow.online/webservice/rest/server.php', [
        'wstoken' => '89c866ec03fb4a700acf92b0db296bf3',
        'moodlewsrestformat'=>'json',
        'wsfunction'=>'core_user_get_users',
        'criteria[0][key]'=>'lastname',
        'criteria[0][value]'=>'%'
    ])->json();
    //dd($user);
    return view('usuarios.lista',compact('user'));
}
}
