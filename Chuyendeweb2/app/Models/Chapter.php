<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Chapter';

    protected $fillable = [
        'Chapter_id',
        'Comic_id',
        'Chapter_name'
    ];
}
