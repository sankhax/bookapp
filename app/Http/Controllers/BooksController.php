<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BooksController extends Controller
{
    public function __construct()
    {
        //
    }
	public function index()
	{
		return Book::all();
	}
	public function show($id){
        $post = Book::find($id);
        if(! $post){
            return response()->json([
                'message'=>'book not found'
            ], 404);
        }
        return response ($post);
    }
}
