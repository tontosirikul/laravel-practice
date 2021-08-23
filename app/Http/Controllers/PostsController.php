<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $id = 4;

        // Non fluent
        // DB::select(['table => 'posts', 'where' => ['id' => 1]])

        // fluent
        // DB::table('posts')->where('id',1)->get()
        

        // $posts = DB::select('select * from posts where id = :id',['id'=>$id]);
        
        // $posts = DB::table('posts')->select('body')->where('id',$id)->get();

        // $posts = DB::table('posts')
        //     ->where('created_at','<',now()->subDay())
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at','<',now()->subDay())
        //     ->orwhere('title','Mrs.')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->whereBetween('id',[0,3])
        //     ->get();
        
        // $posts = DB::table('posts')
        //     ->whereNotNull('title')
        //     ->get();
        
        // $posts = DB::table('posts')
        //     ->select('title')
        //     ->distinct()
        //     ->get();

        // $posts = DB::table('posts')
        //     ->orderBy('title','asc')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->latest()
        //     ->get();

        $posts = DB::table('posts')
            ->inRandomOrder()
            ->get();

        // $posts = DB::table('posts')
        //         ->find($id);

        // $posts = DB::table('posts')
        //     ->where('id',$id)
        //     ->count();

        // $posts = DB::table('posts')
        //     ->count();

        // $posts = DB::table('posts')
        //     ->insert([
        //         'title' => 'New Post', 
        //         'body' => 'New body',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);

        // $posts = DB::table('posts')
        //     ->where('id','=',$id)
        //     ->update([
        //         'title','updated post',
        //         'body' => 'updated body',
        //     ]);

        // $posts = DB::table('posts')
        //     ->where('id','=',$id)
        //     ->delete();

        dd($posts);
    }
}
