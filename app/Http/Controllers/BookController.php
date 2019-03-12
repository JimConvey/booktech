<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BookController extends Controller
{
    public function isbn_filter(Request $request)
    {       
        
        $authorName = $request->input('author');
        if(!empty($authorName))
        {
        	$splitName = explode(' ', $authorName, 2); // Restricts it to only 2 values

			$first_name = $splitName[0];
			$last_name = !empty($splitName[1]) ? $splitName[1] : '';
			$author = Author::where('first_name',$first_name)
						->with('books')
						->first();
			return $author->books;
        }
    	
    }
}
