<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth'
        ];
    }
    public function index()
    {
        $posts = Auth::user()->posts()->latest()->paginate(6);
        //Post::where('user_id', Auth::id())->get();
        
        //dd($posts);

        return view('users.dashboard', [ 'posts' => $posts ]);
    }
}
