<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "answer_content",
        "question_id",
        "user_id",
        "status"
    ];
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }

    public function book_loans(){
        return $this->hasMany(BookLoan::class);
    }
}
