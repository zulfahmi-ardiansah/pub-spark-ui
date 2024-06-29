<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    HomeController,
    MasterController,
    ReportController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Root
    Route::any("/", function () { return redirect("/login"); });

// Auth
    Route::any("/login", [AuthController::class, "login"]);
    Route::any("/logout", [AuthController::class, "logout"]);

// Logged User
    Route::middleware(["web"])->group(function () {
        
        // Home
            Route::prefix("/home")->group(function () {
                Route::get("/", [HomeController::class, "index"]);
                Route::any("/password", [HomeController::class, "password"]);
            });
            Route::any("/form", [HomeController::class, "form"]);
            Route::any("/recap", [HomeController::class, "recap"]);

        // Master
            Route::prefix("/master")->group(function () {
                Route::any("/project", [MasterController::class, "project"]);
                Route::any("/template", [MasterController::class, "template"]);
                Route::any("/employee", [MasterController::class, "employee"]);
                Route::any("/target-project", [MasterController::class, "targetProject"]);
                Route::any("/target-individual", [MasterController::class, "targetIndividual"]);
            });

    });