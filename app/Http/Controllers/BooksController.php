<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Book;

use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function create()
    {

      $categ=Category::all();

    	return view('insert', compact('categ'));

    }

    public function show($isbn)
    {
    	$book=DB::table('books')->where('isbn', '=', $isbn)->get();

     
      return view('bookdetails', compact('book'));
    }

    
    public function store()
   {

   	  $this->validate(request(), [
                'isbn'=> 'required',
                'book_title' => 'required',
                'book_author' => 'required',
                'book_price' => 'required',
                'book_description' => 'required',
                'insert_category' => 'required',

            ]);
      
      
      if(!is_null(request()->file('image'))){
        
        $image_name=request()->file('image')->hashName();
     
        request()->file('image')->store('public/images');
        } else $image_name="";

      Book::create([

            'isbn' => request('isbn'),

            'book_title' => request('book_title'),

            'book_author' => request('book_author'),

            'book_price' => request('book_price'),

            'book_description' => request('book_description'),

            'category_id' => request('insert_category'),

            'book_image' => $image_name
            ]);
        
     
   	  return redirect('/');

   }
   

   public function display($category_id){

        $bookdetails=DB::table('books')->where('category_id', '=', $category_id)->get();
    
        return view('displaybooks', compact('bookdetails'));
   }
}
