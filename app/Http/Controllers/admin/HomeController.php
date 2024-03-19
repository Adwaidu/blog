<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts/dashboard',compact('posts'));
       //$admin= Auth::guard('admin')->user();

        //echo 'welcome' .$admin->name.'<a href="'.route('admin.logout').'">Logout</a>';
    }
    public function logout(){
        
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function view()
    {
        $posts = Post::all();

        return view('welcome', compact('posts'));
    }
}
