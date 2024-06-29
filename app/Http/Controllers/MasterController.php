<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    AdmCategory,
    AdmDepartement,
    AdmUser
};

class MasterController extends Controller
{
    // Template
        public function template (Request $request)
        {
            $data["title"]  =   "Template";
            try {
                if ($request->get("submit-form")) {
                    return view("master.template.form", $data);
                } else if ($request->get("submit-process")) {
                    return redirect(url("/master/project"))->with("success", "Data berhasil disimpan !");
                }
            } catch (\Throwable $e) {
                return redirect(url("/master/template"))->with("error", "Terjadi kesalahan !");
            }
            return view("master.template.list", $data);
        }

    // Project
        public function project (Request $request)
        {
            $data["title"]  =   "Proyek";
            try {
                if ($request->get("submit-form")) {
                    return view("master.project.form", $data);
                } else if ($request->get("submit-process")) {
                    return redirect(url("/master/project"))->with("success", "Data berhasil disimpan !");
                } else if ($request->get("submit-delete")) {
                    return redirect(url("/master/project"))->with("success", "Data berhasil dihapus !");
                }
            } catch (\Throwable $e) {
                return redirect(url("/master/project"))->with("error", "Terjadi kesalahan !");
            }
            return view("master.project.list", $data);
        }

    // Target Project
        public function targetProject (Request $request)
        {
            $data["title"]  =   "Target Proyek";
            try {
                if ($request->get("submit-form")) {
                    return view("master.target-project.form", $data);
                } else if ($request->get("submit-process")) {
                    return redirect(url("/master/target-project"))->with("success", "Data berhasil disimpan !");
                } else if ($request->get("submit-delete")) {
                    return redirect(url("/master/target-project"))->with("success", "Data berhasil dihapus !");
                }
            } catch (\Throwable $e) {
                return redirect(url("/master/target-project"))->with("error", "Terjadi kesalahan !");
            }
            return view("master.target-project.list", $data);
        }

    // Target Individual
        public function targetIndividual (Request $request)
        {
            $data["title"]  =   "Target Proyek";
            try {
                if ($request->get("submit-form")) {
                    return view("master.target-individual.form", $data);
                } else if ($request->get("submit-process")) {
                    return redirect(url("/master/target-individual"))->with("success", "Data berhasil disimpan !");
                } else if ($request->get("submit-delete")) {
                    return redirect(url("/master/target-individual"))->with("success", "Data berhasil dihapus !");
                }
            } catch (\Throwable $e) {
                return redirect(url("/master/target-individual"))->with("error", "Terjadi kesalahan !");
            }
            return view("master.target-individual.list", $data);
        }

    // Employee
        public function employee (Request $request)
        {
            $data["title"]  =   "Pegawai";
            try {
                if ($request->get("submit-form")) {
                    return view("master.employee.form", $data);
                } else if ($request->get("submit-process")) {
                    return redirect(url("/master/employee"))->with("success", "Data berhasil disimpan !");
                    return false;
                } else if ($request->get("submit-delete")) {
                    return redirect(url("/master/user"))->with("success", "Data berhasil dihapus !");
                }
            } catch (\Throwable $e) {
                return redirect(url("/master/employee"))->with("error", "Terjadi kesalahan ! ");
            }
            return view("master.employee.list", $data);
        }
}
