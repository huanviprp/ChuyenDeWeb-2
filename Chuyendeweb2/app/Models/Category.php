<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'category';
    protected $primaryKey = 'Category_id';
    public function comic()
    {
        return $this->hasMany('App\Models\Comic', 'Category_id', 'Comic_id');
    }
    protected $fillable = [
        'Category_id',
        'Category'
    ];
}
