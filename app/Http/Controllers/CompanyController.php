<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Monitor;
use App\Models\Comment;

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

    public function list(Request $request,Company $company)
    {
       $companies = $company->select('platform_name','id')->where('platform_name','like','%'.$request->keyword.'%')->get();
       if ($companies){
            return response()->json(['code'=>1,'data'=>$companies]);
       }
         return response()->json(['code'=>2,'date'=> NULL]);
    }

    public function comment(Request $request,Comment $comment,Company $company)
    {
      $comments = $comment->with('company','user')->where('status',true)->paginate(20);
      $companies = $company->where(['is_check'=> true,'category'=>1])->take(10)->get();
      return view('company.commentlist',compact('comments','companies'));

    }
}
