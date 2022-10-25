<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('name', 'asc')->limit(20)->get();

        return view('authors/authors', compact('authors'));
    }

    public function create()
    {
        $author = new Author;
        return view('authors/create', compact('author'));
    }

    public function store(Request $request)
    {
        $author = new Author;
        $author->name = $request->input('name');
        $author->slug = $request->input('slug');
        $author->save();

        return 'Saved';
    }
}
