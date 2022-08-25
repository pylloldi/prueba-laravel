<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = array();
        $categories = Category::select()->get();

        $by = $request->by ? $request->by : '';
        $q = $request->q ? $request->q : '';
        $category_id = $request->category_id ? $request->category_id : '';

        if(!$q && !$category_id)
        {
            $posts = Post::latest()
            ->take(20)
            ->with('user')
            ->get();           
        }
        else 
        {
            if($request->by == 'title') 
            {
                $posts = Post::select()
                ->with('user')
                ->where('title', 'like', $q .'%')
                ->orWhere('description', 'like', $q .'%')
                ->get();                
            }
            else 
            {
                $posts = Post::where('category_id', '=', $category_id)
                ->with('user')
                ->get();                
            }
        }

        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'by' => $by,
            'q' => $q,
            'category_id' => $category_id
        ]);
    }
}
