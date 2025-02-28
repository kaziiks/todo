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
}
