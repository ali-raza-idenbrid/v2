<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::orderBy('created_at','desc')->get();
        return response()->json(['blogs' => $blogs]);
    }

    public function blogDetail($id){
        $blog=Blog::find($id);
        $latest_blogs=Blog::orderBy('created_at','desc')->latest()->take(5)->get();
        $prev = Blog::where('id','<',$id)->get();
        $latest = Blog::where('id','>',$id)->get();

        if(count($prev) > 0){
            $prev= true;
        }
        if(count($latest) > 0){
            $latest= true;
        }

        return response()->json([
            'blog' => $blog ,
            'latest_blogs' => $latest_blogs,
            'previous' => $prev,
            'latest' => $latest
        ]);
    }

    public function prevBlogDetail($id){
        $prev = Blog::where('id','<',$id)->latest()->first();
        return response()->json([
            'id' => $prev['id'] ,
        ]);
    }

    public function latestBlogDetail($id){
        $latest = Blog::where('id','>',$id)->first();
        return response()->json([
            'id' => $latest->id ,
        ]);
    }
}
