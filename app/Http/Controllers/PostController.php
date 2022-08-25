<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Exports\PostsExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth')
        ->except(['index', 'show']);
    }

    public function index(User $user) 
    {
        $posts = Post::where('user_id', $user->id)->paginate(12);
        
        return view('dashboard', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function create() 
    {
        $categories = Category::select()->get();

        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'categories' => 'required'
        ]);

       $request->user()->posts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'observations' => $request->observations,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
            'category_id' => $request->categories
        ]);

        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function update(Request $request, $post_id) 
    {
        
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'categories' => 'required'
        ]);

        $post = Post::find($post_id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->observations = $request->observations;
        $post->category_id = $request->categories;
        $post->save();
        
        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function show(User $user, Post $post)
    {
        $categories = Category::select()->get();

        return view('posts.show', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function destroy(Post $post) 
    {
        $this->authorize('delete', $post);

        $post->delete();

        $imagePath = public_path('uploads/') . $post->image;

        if(File::exists($imagePath)) {
            unlink($imagePath);
        }

        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function export(Request $request) 
    {
        $by = $request->by;
        $q = $request->q;
        $category_id = $request->category_id;

        return Excel::download(new PostsExport($by, $q, $category_id), 'posts.xlsx');
    }
}
