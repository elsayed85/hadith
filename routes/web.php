<?php

use App\Http\Controllers\Hadith\BookController;
use App\Http\Controllers\Hadith\HadithController;
use App\Http\Controllers\SiteController;
use App\Models\Hadith\Book;
use App\Models\Hadith\Hadith;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    // $books = Storage::allFiles("books");
    // foreach ($books as $book) {
    //     $name = str_replace(".json", "", str_replace("books/", "", $book));
    //     $hadiths = collect(json_decode(Storage::get($book)))->map(function ($hadith) {
    //         return new Hadith(['hadith' => $hadith->hadith, 'description' => $hadith->description, 'search_term' => $hadith->searchTerm]);
    //     });
    //     $book = Book::create(['name' => $name]);
    //     $book->hadiths()->saveMany($hadiths);
    // }
});


Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('search', [SiteController::class, 'search'])->name('search');
Route::get('book/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('hadith/{hadith}', [HadithController::class, 'show'])->name('hadith.show');
