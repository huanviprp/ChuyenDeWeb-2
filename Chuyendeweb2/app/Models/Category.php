<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Category';

    protected $fillable = [
        'Category_id',
        'Category',
        'Comic_id'
    ];
}
