<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserbyfieldController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $response=Http::get('http://localhost/moodle/webservice/rest/server.php', [
        //     'wstoken' => env('APP_KEY_URL'),
        //     'moodlewsrestformat' => 'json',
        //     'wsfunction' => 'core_user_get_users_by_field',
        //     'field' => 'id',
        //     'values[0]' => '3'

        // ])->json();

        $function= "core_user_get_users_by_field";

        $response = Http::get('https://plataforma-arrow.online/webservice/rest/server.php', [
            'wstoken' => env('APP_KEY_URL'),
            'moodlewsrestformat' => 'json',
            'wsfunction' => $function,
            'field' => 'id',
            'values[0]' => '3'

        ])->json();

        return view('usuariomoodle', ['data' => $response]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Http::get('https://plataforma-arrow.online/webservice/rest/server.php', [
            'wstoken' => env('APP_KEY_URL'),
            'moodlewsrestformat' => 'json',
            'wsfunction' => 'core_user_get_users_by_field',
            'field' => 'id',
            'values[0]' => $id

        ])->json();

        return view('usuariomoodle', ['data' => $response]);
    }
}