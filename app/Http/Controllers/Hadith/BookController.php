<?php

namespace App\Http\Controllers\Hadith;

use App\Http\Controllers\Controller;
use App\Models\Hadith\Book;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(Book $book)
    {
        SEOMeta::setTitle("كتاب {$book->name}");
        SEOMeta::setDescription("كتاب {$book->name}");
        $book = $book->loadCount(['hadiths']);
        return view('books.show', ['book' => $book]);
    }
}
