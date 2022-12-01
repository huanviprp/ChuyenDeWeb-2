<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'comic';

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

    public function addView($data, $id)
    {
        $data[] = $id;
        return DB::update("UPDATE $this->table SET `type_name`='?'WHERE id = ?", $data);
    }
}
