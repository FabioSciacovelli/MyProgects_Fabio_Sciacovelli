<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WriterController;

class WriterController extends Controller
{
    public function dashboard(){
        $acceptedSrticles = Article::where('user_id', Auth::user()->id)->where('is_accepted',true)->orderBy('created_at', 'desc')->get();
        $rejectedArticles = Article::where('user_id', Auth::user()->id)->where('is_accepted',false)->orderBy('created_at', 'desc')->get();
        $unrevisionedArcles = Article::where('user_id', Auth::eser()->id)->where('is_accepted',NULL)->orderBy('created_at', 'desc')->get();

        return view('writer.dashboard', compact('acceptedArticles', 'rejectedArticles', 'unrevisionedArticles'));
    }
}
