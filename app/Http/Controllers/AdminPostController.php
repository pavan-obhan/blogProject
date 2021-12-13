<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(50)
        ]);
    }


    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {

        $attributes = $this->validatePost();
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = \Illuminate\Support\Str::slug($attributes['title'], '-');
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        if ($attributes['title']??false) {
            $attributes['slug'] = \Illuminate\Support\Str::slug($attributes['title'], '-');
        }

        if ($attributes['thumbnail']??false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return back()->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }

    protected function validatePost(?Post $post=null): array  //?Post $post=null means it may or may not need post
    {
        $post ??= new Post(); //if we have $post we will use that else we will initialize $post to new instance of Post class
        return request()->validate([
            'title' => ['required', Rule::unique('posts', 'title')->ignore($post->id)],
            'thumbnail' => $post->exists ? ['image'] : ['required:image'],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('posts', 'category_id')]
        ]);
    }
}
