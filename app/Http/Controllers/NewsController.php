<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news=News::orderBy('created_at','desc')->get();
        return response()->json(['news'=>$news]);
    }

    public function newsDetail($id)
    {
        $news=News::find($id);
        $latest_news=News::orderBy('created_at','desc')->latest()->take(5)->get();
        $prev = News::where('id','<',$id)->get();
        $latest = News::where('id','>',$id)->get();


        if(count($prev) > 0){
            $prev= true;
        }
        else{
            $prev= false;
        }
        if(count($latest) > 0){
            $latest= true;
        }
        else{
            $latest= false;
        }

        return response()->json([
            'news'=>$news,
            'latest_news' => $latest_news,
            'previous' => $prev ,
            'latest' => $latest
        ]);
    }

    public function prevNewsDetail($id){
        $prev = News::where('id','<',$id)->latest()->first();
        return response()->json([
            'id' => $prev['id'] ,
        ]);
    }

    public function latestNewsDetail($id){
        $latest = News::where('id','>',$id)->first();
        return response()->json([
            'id' => $latest->id ,
        ]);
    }

}
