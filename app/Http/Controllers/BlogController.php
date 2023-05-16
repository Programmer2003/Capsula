<?php

namespace App\Http\Controllers;

use App\Http\Filters\BlogFilter;
use App\Http\Requests\Blog\FilterRequest;
use App\Models\Blog;
use App\Models\BTag;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //$this->middleware('is_admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $filter = app()->make(BlogFilter::class, ['queryParams' => array_filter($data)]);
        $blogs = Blog::filter($filter)->paginate(6)->withQueryString();
        // $blogs = Blog::paginate(6)->withQueryString();
        $latest = Blog::latest('created_at')->limit(3)->get();
        $tags = BTag::all();
        return view('blog', compact('blogs', 'latest', 'tags'));
    }
}
