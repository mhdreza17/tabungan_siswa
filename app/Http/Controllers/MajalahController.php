<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MajalahController extends Controller
{
    public function index()
    {
        $posts = Post::take(4)->get();
        // dd($post[0]->image);
        $categories = Category::take(4)->get();
        $catrandom = Category::inRandomOrder()->take(2)->get();
        $populer = Post::orderBy('view', 'desc')->get();
        $popular = Post::orderBy('view', 'desc')->take(6)->get();
        $latest = Post::latest()->take(6);
        $startDate = Carbon::now()->subDays(7);
        $trending = Post::whereDate('created_at', '>=', $startDate)
                     ->orderBy('view', 'desc')
                     ->take(5)
                     ->get();
        $random = Post::inRandomOrder()->take(5)->get();


        return view('majalah.index', compact('populer', 'posts', 'categories', 'popular', 'latest', 'trending', 'random', 'catrandom'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->increment('view');
        $categories = Category::get();

        return view('majalah.show', compact('post', 'categories'));
    }
}
