<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Comment $comment)
    {
        $this->validate($request,[
            'company_id' => 'required',
            'content' => 'required',
        ],[
            'company_id.required' => '平台名字不为空',
            'content.required' => '评论内容不为空',
        ]);

        $comment = Comment::create([
            'user_id' => Auth::id(),
            'company_id' => $request->company_id,
            'content'   => $request->content
        ]);

        return response()->json(['code'=>1,'msg'=>'评论成功']);
    }
}
