<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folowcomic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'folow-comic';

    protected $fillable = [
        'User_id',
        'Comic_id'
    ];
}
