<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $fillable = [
        'pname', 'color', 'creator','price', 'description', 'image', 'level_id','locale'
    ];
    protected $table = 'product';
    // Define the relationship with sub_category
    public function levels()
    {
        return $this->belongsTo(LevelModel::class, 'level_id');
    }

}
