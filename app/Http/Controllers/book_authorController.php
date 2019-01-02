<?php

namespace App\Http\Controllers;

use App\book_author;

use Illuminate\Http\Request;

class book_authorController extends Controller
{

    public function showAllAuthors_book()
    {
        return response()->json(book_author::all());
    }

    public function showOneAuthor_book($id)
    {
        return response()->json(book_author::find($id));
    }

    public function create(Request $request)
    {
        $bookauthor = book_author::create($request->all());

        return response()->json($bookauthor, 201);
    }

    public function update($id, Request $request)
    {
        $bookauthor = book_author::findOrFail($id);
        $bookauthor->update($request->all());

        return response()->json($bookauthor, 200);
    }

    public function delete($id)
    {
        book_author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }


//    public function books()
//    {
//        return $this->hasMany('App\Book');
//    }
}

