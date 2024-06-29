<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    AdmUser,
    RepHeader
};

class HomeController extends Controller
{
    // Index
        public function index (Request $request)
        {
            $data["title"]  =   "Beranda";
            return view("home.index", $data);
        }

    // Password
        public function password (Request $request)
        {
            $data["title"]  =   "Ganti Kata Sandi";
            if ($request->get("submit-process")) {
                return redirect(url("/home"))->with("success", "Kata sandi berhasil diubah !");
            }
            return view("home.password", $data);
        }

    // Form
        public function form (Request $request) {
            $data["title"]  =   "Penilaian";
            return view("home.form", $data);
        }

    // Recap
        public function recap (Request $request) {
            $data["title"]  =   "Rekapitulasi";
            try {
                if ($request->get("submit-form")) {
                    return view("home.view", $data);
                }
            } catch (\Throwable $e) {
                return redirect(url("/recap"))->with("error", "Terjadi kesalahan !");
            }
            return view("home.recap", $data);
        }
}
