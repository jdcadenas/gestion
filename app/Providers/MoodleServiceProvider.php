<?php

namespace App\Providers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class MoodleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MoodleServiceInterface::class, MoodleService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Route::post('/moodle/login', function (Request $request) {
        //     $moodleService = app(MoodleServiceInterface::class);
        //     $response = $moodleService->loginTeacher($request->username, $request->password);
        //     return response()->json($response);
        // });
    }
}