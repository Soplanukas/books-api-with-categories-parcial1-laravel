<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $primaryKey = 'id_category';
    protected $fillable = [
        'category_name',
        'category_description',
        'priority',
        'category_status',
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id_category');
    }
}
