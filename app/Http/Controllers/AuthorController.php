<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Log;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $author = Author::find(1);
        dd($author->logs);
        // $log = new Log(['old_value' => $author->name,'new_value'=>'Farjana']);
        // $author->logs()->save($log);
        // dd($author->chapters->toArray());

        // foreach ($author->books as $book) {
        //     echo $book->title."</br>";
        //  }

        // $book = Author::find(1)->books()->where('title', 'Harry Potter')->first();
        // dd($book->toArray());

        // $authors = Author::has('books')->get();
        // dd($authors->toArray());
       

        # Authors with at least one book and with at least one chapter
        // $authors = Author::has('books.chapters')->get();
        // dd($authors->toArray());

        # All authors with 5 books or more
        // $authors = Author::has('books', '>=', 5)->get();


        # All authors of Harry Potter books
        // $authors = Author::whereHas('books', function ($query) {
        //     $query->where('title', 'like', 'Harry Potter%');
        // })->get();

        // $author->books()->create([
        //     'title' => 'Harry Potter',
        // ]);

        // $author->books()->createMany([
        //     [
        //         'title' => 'Harry Potter'
        //     ],
        //     [
        //         'title' => 'Harry Potter Returns'
        //     ]
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
