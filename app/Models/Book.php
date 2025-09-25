<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    protected $primaryKey = 'id_book';
    

    use HasFactory;
    protected $fillable = [
        'book_name',
        'book_author_name',
        'book_price',
        'book_stock',
        'book_status',
    ];
}
