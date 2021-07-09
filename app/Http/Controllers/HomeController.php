<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Group;
use App\Models\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request,Article $article,Company $company)
    {
        $companies = $company->where(['is_check' => true,'is_real'=>true])->orderByDesc('sort')->take(10)->get();
        $news = $article->where('is_check',true)->orderByDesc('created_at')->paginate(10);
        return view('home',compact('news','companies'));
    }


    public function about(Request $request)
    {
        return view('pages.about');
    }

    public function contactus(Request $request)
    {
        return view('pages.contactus');
    }

    public function agreement(Request $request)
    {
        return view('pages.agreement');
    }
    public function statement(Request $request)
    {
        return view('pages.statement');
    }
}
