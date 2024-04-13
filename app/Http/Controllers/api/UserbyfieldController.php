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
        $response=Http::dd()->get('http://localhost/moodle/webservice/rest/server.php?wstoken=66607fe2f5d099c28c9a4e30f718f0cc&moodlewsrestformat=json&wsfunction=core_user_get_users_by_field&field=id&values[0]=3')->json();
        return view('respuesta', ['data' => $response]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response=Http::get('https://plataforma-arrow.online/webservice/rest/server.php?wstoken=b5b21ab543dc353b80fd60e15b8d80fc&moodlewsrestformat=json&wsfunction=core_user_get_users_by_field&field=id&values[0]='.$id)->json();
        return view('respuesta', ['data' => $response]);

        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}