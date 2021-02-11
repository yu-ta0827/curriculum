<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class TweetController extends Controller
{
    //
    public function add()
    {
        return view('admin.sns.tweet');
    }

    public function create(Request $request)
    {
  
        // 以下を追記
        // Varidationを行う
        $this->validate($request, Post::$rules);
  
        $post = new Post;
        $form = $request->only($post->getFillable());

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
  
        // データベースに保存する
        $post = $post->create($form);
        $post = $post->save();
  
        return redirect('admin/sns/main');
    }

    public function index() 
    {   
        // orderByで作った時間順にしてそれを新しい者順に入れる
        $posts = Post::orderBy('created_at', 'desc')->get();

        $posts->load('user');
        // DD($posts);
        
        return view('admin.sns.tweet', compact('posts'));
    }

    public function delete(Request $request)
    {
        // Postテーブルから削除で送られてきた$post->idの主キーとし全てを論理削除する
        $posts =Post::find($request->id);
        $posts->delete();
        return redirect('admin/sns/main');
    }
}

