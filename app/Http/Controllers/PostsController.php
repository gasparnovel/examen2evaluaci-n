<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index(Request $request) {
        $posts = Posts::all();
        return view('posts.index', compact('posts'));
    }
}

    public function create(Posts $post)
    {
        $this->authorize('create', $post);
        return view('posts.create', compact('post'));
    }

    public function store(PostsRequest $request)
    {
        Posts::create($request->validated());
        return redirect()->route('posts.index');
    }

    public function show(Posts $post)
    {
        $this->authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
        Gate::authorize('comprobar_role');
        $post = Posts::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(PostsRequest $request, Posts $post)
    {
        $this->authorize('update', $post);
        $post->update($request->all());
        return redirect('posts');
    }

    public function destroy(Posts $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index');
}