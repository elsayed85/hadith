<?php

namespace App\Http\Livewire\Hadith\Book;

use App\Models\Hadith\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    public Book $book;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function render()
    {
        $hadiths = $this->book->hadiths()->paginate(4);
        return view('livewire.hadith.book.show', ['hadiths' => $hadiths]);
    }
}
