<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(Request $request, Company $company)
    {
        $companties = $company->withOrder($request->order)
                               ->where('is_check',true)
                               ->where('category',$request->category ?? '')
                               ->paginate(20);
        return view('company.index',compact('companties','request'));
    }

    public function show(Company $company)
    {
        return view('company.show',compact('company'));
    }
}
