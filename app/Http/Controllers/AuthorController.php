<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::where('is_active',1)->paginate(2);
        return view('admin.author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.author.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $author=Author::create($request->validated());
        if ($author) {
            return redirect()->route('authors.index')->with('success','Author created successfully');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('admin.author.update',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $status=$author->update($request->validated());
        if ($status) {
            return redirect()->route('authors.index')->with('success','Author updated successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->update(['is_active'=>0]);
        return redirect()->route('authors.index');
    }
}
