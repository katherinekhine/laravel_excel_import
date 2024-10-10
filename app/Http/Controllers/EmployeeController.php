<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function import_excel()
    {
        return view('import_excel');
    }

    public function import_excel_post(Request $request) {}
}
