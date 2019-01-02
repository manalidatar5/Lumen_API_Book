<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{

    public function showAllBooks()
    {
        return response()->json(Book::all());
    }

    public function showOnebook($id)
    {
        return response()->json(Book::find($id));
    }

    public function create(Request $request)
    {


//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required|email|unique:users',
//        ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }



}
