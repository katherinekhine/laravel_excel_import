<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{

    public function import_excel()
    {
        return view('import_excel');
    }

    public function import_excel_post(Request $request)
    {
        // logger($request);
        Excel::import(new EmployeeImport, $request->file('excel_file')->store('temp'));

        return redirect()->back();
        // dd($request->all());
    }
}
