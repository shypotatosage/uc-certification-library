<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookFilter extends Component
{
    public $category = ''; // Store selected category
    public $categories = []; // Categories for the dropdown

    // Mount the categories passed from the parent view
    public function mount($categories)
    {
        $this->categories = $categories;
    }

    // Render the view with the filtered books
    public function render()
    {
        // Filter books based on category selection
        $books = Book::when($this->category, function ($query) {
            return $query->whereHas('categories', function ($q) {
                $q->where('name', $this->category);
            });
        })->get();

        return view('livewire.book-filter', [
            'books' => $books,
            'categories' => $this->categories
        ]);
    }
}

