<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Group;

class NewsController extends Controller
{
    public function index(Request $request, Article $article)
    {
        $groups = Group::where('status',true)->get();
        $news = $article->with('newGroup')->where('group',$request->group ?? '')->paginate(20);
        return view('actiles.index', compact('news','groups','request'));
    }

    public function show(Article $new)
    {
        $new->addViewCount();
        return view('actiles.show',compact('new'));
    }
}
