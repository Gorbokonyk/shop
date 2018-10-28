<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $articls = Blog::all();
        return view('pages.indexBlog', compact('articls'));
    }
}
