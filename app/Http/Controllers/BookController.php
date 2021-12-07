<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function get()
    {

        return response()->json([
            "message" => "GET Method Success"
        ]);
    }
    function post(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->synopsis = $request->synopsis;

        $book->save();

        return response()->json([
            "message" => "Success",
            "data" => $book
        ]);
    }
    function put($id)
    {
        return response()->json([
            "message" => "PUT Method Success with id " . $id
        ]);
    }
    function delete($id)
    {
        return response()->json([
            "message" => "DELETE Method Success with id " . $id
        ]);
    }
}
