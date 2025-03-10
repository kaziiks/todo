<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;


class DiaryController extends Controller
{
    public function index(){
        $diarys = Diary::all();
        return view("diaries.index", compact("diarys"));
    }
    public function create(){
        return view("diaries.create");
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required", "max:255"],
            "date" => ["required", "date", "date_format:Y-m-d"],
          ]);
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"],
        ]);
        return redirect("/diaries");
    }
}
