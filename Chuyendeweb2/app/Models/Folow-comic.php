<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folowcomic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Folow-comic';

    protected $fillable = [
        'user_id',
        'Comic_id'
    ];
}
