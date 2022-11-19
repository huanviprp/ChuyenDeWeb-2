<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pageimg extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Page-img';

    protected $fillable = [
        'Page_id',
        'Chapter_id',
        'img',
        'Page_number'
    ];
}
