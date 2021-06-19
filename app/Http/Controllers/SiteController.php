<?php

namespace App\Http\Controllers;

use App\Models\Hadith\Book;
use App\Models\Hadith\Hadith;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('الرئيسية');
        $books = Book::latest()->withCount(['hadiths'])->paginate(6);
        return view('index', ['books' => $books]);
    }

    public function search(Request $request)
    {
        SEOMeta::setTitle('البحث');
        if (is_null($request->q)) {
            return redirect(route('index'));
        }
        $term = $request->input('q');
        SEOMeta::setTitle("البحث عن {$term}");
        OpenGraph::setUrl(route('search' , ['q' => $term]));
        return view('search', ['term' => $term]);
    }
}
