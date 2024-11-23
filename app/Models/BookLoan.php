<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'is_returned'
    ];

    public function book() : BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
