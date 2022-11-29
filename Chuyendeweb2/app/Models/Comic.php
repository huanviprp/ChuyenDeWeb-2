<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Comic';

    protected $fillable = [
        'Comic_id',
        'Name',
        'Description',
        'Img_feature',
        'Date',
        'View',
        'Status',
        'author_id',
        'feature'
    ];

}
