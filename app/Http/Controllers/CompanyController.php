<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Monitor;

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

    public function monitor(Request $request,Monitor $monitor)
    {
      $companies = $monitor->where('created_at','like','%'.date('Y-m-d').'%')->get();
      return view('company.monitor',compact('companies'));
    }

    public function newest(Request $request,Monitor $monitor)
    {
      $companies = $monitor->orderByDesc('check_time')->paginate(30);
      return view('company.newest',compact('companies'));
    }
}
