<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function get()
    {
        $data = Book::all();

        return response()->json([
            "message" => "Success",
            "data" => $data
        ]);
    }

    function getById($id)
    {
        $data = Book::where('id', $id)->get();

        if ($data) {
            return response()->json([
                "message" => "Success",
                "data" => $data
            ]);
        }
        return response()->json([
            "message" => "Book with id " . $id . " not found."
        ], 400);
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
    function put($id, Request $request)
    {
        $book = Book::where('id', $id)->first();
        if ($book) {
            $book->title = $request->title ? $request->title : $book->title;
            $book->author = $request->author ? $request->author : $book->author;
            $book->publisher = $request->publisher ? $request->publisher : $book->publisher;
            $book->synopsis = $request->synopsis ? $request->synopsis : $book->synopsis;

            $book->save();

            return response()->json([
                "message" => "PUT Method Success with id " . $id,
                "data" => $book
            ]);
        }
        return response()->json([
            "message" => "Book with id " . $id . " not found."
        ], 400);
    }
    function delete($id)
    {
        $book = Book::where('id', $id)->first();
        if ($book) {
            $book->delete();

            return response()->json([
                "message" => "DELETE Book with id " . $id . "success!"
            ]);
        }
        return response()->json([
            "message" => "Book with id " . $id . " not found."
        ], 400);
    }
}
