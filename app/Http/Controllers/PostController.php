<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showAll()
    {

        return view('pages.dashboard.posts.allposts', ['title' => 'blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->simplePaginate(5)->withQueryString()]);
    }

    public function showSinglePost(Post $post)
    {
        return view('pages.dashboard.posts.show', ['title' => 'Single Post', 'post' => $post]);
    }

    public function authorPost(User $user)
    {
        return view('posts', ['title' => 'Articles By ' . $user->name, 'posts' => $user->posts]);
    }

    public function showAllCategories(Category $category)
    {
        return view('posts', ['title' => 'Semua kategory ' . $category->slug, 'posts' => $category->posts]);
    }

    // app/Http/Controllers/PostController.php
    public function updateStatus(Request $request, Post $post)
    {
        $request->validate([
            'status' => 'required|in:disetujui,tidak_disetujui,dalam_proses',
        ]);

        // Perbarui status post
        $post->status = $request->input('status');
        $post->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}
