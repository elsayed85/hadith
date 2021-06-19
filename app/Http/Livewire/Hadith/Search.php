<?php

namespace App\Http\Livewire\Hadith;

use App\Models\Hadith\Hadith;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $term = '';

    public function mount($term)
    {
        $this->term = $term;
    }

    public function render()
    {
        $term = $this->term;
        $hadiths = Hadith::where("hadith", "like", "%{$term}%")
            ->orWhere("search_term", "like", "%{$term}%")
            ->paginate(10);
        return view('livewire.hadith.search', ['hadiths' => $hadiths]);
    }
}
