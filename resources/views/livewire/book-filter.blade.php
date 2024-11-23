<div>
    <select wire:model="category" class="form-select block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
        <option value="">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{ $category->name }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-6">
    @if($books->isEmpty())
        <p>No books found.</p>
    @else
        @foreach ($books as $book)
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden drop-shadow-lg">
                <img src="{{ $book->book_cover }}" alt="Book Cover for {{ $book->name }}" class="w-full h-96 object-cover">

                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">{{ $book->name }}</h2>

                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        {{ Str::limit($book->description, 100) }}
                    </p>

                    <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
                        <strong>Categories:</strong>
                        {{ $book->categories->pluck('name')->join(', ') }}
                    </p>
                </div>
            </div>
        @endforeach
    @endif
    </div>
</div>
