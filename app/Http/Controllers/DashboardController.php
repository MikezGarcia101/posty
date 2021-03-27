<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //Index
    public function index()
    {
        // dd(auth()->user()->posts);
        // dd(Post::find(1)->created_at);

       

        return view('dashboard');
    }
}
