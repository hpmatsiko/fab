<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $fillable = ['level_id','level','locale'];
    protected $table = 'levels';

     public function SubCategory()
    {
        return $this->belongsTo(SubCategoryModel::class, 'sub_category_id');
    }

      public function products()
    {
        return $this->hasMany(productModel::class, 'level_id');
    }
}
