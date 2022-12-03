<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'author';
    protected $primaryKey = 'Author_id';
    protected $fillable = [ 
        'Author_id',
        'Author_name',
        'Gender'
    ];
}
