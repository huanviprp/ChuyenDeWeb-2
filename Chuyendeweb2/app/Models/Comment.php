<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'comment';
    protected $primaryKey = 'Comment_id';
    public function comic(){
        return $this->hasMany('App\Models\Comic', 'Comment_id', 'Name');
    }
    protected $fillable = [ 
        'Comment_id',
        'Content'
    ];
}
