<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function index() {
        return view("posts.index", [
            "posts" => Post::latest()->filter(
                    request(['search', 'category', 'author'])
                )->paginate(15)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view("posts.show", ["post" => $post]);
    }

    public function create() {
        return view("posts.create");
    }

    public function store() {
        $attributes = request()->validate([
            "title" => ["required", "min:3"],
            "slug" => ["required", Rule::unique("posts", "slug")],
            "excerpt" => ["required", "min:3"],
            "body" => ["required", "min:3"],
            "category_id" => ["required", "exists:categories,id"],
        ]);

        $attributes["user_id"] = auth()->id();

        Post::create($attributes);

        return redirect("/")->with("success", "Your post has been created!");
    }
}
