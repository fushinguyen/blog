<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function getIndex()
    {
        return view('admin.article');
    }

    public function postIndex()
    {
        return \DB::table('post')
                ->offset( \Input::get('offset') )
                ->limit( \Input::get('limit') )
                ->get();
    }
    public function showProfile()
    {
        // \DB::table('post')
        //         ->where('id','$id')
        //         ->get();
        $post = DB::table('post')
                ->where('id','2')
                ->get();
        var_dump($post);
        die();
        // echo "$post";
    }
}
