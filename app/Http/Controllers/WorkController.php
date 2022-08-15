<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        $works=Work::orderBy('created_at','desc')->get();
        return response()->json(['works'=>$works]);
    }

    public function workDetail($id){
        $work=Work::find($id);
        $latest_works=Work::orderBy('created_at','desc')->latest()->take(3)->get();
        return response()->json(['work' => $work, 'latest_works' => $latest_works]);
    }
}
