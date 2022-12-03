<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user-comment';

    protected $fillable = [
        'User_id',
        'Comment_id'

    ];
}
