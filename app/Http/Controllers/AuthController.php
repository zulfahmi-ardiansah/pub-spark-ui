<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    AdmUser,
    AdmCitizen
};

class AuthController extends Controller
{
    // Login
        public function login (Request $request)
        {
            if ($request->get("submit-process")) {
                return redirect(url("/home"))->with("success", "Selamat datang di Spark !");
            }
            return view("auth.login");
        }

    // Logout
        public function logout (Request $request)
        {
            session()->flush();
            return redirect(url("/login"));
        }
}
