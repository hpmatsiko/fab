<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category','category_id','locale'];
    protected $table = 'sub_category';

    public function productCategory()
    {
        return $this->belongsTo(productCategoryModel::class, 'category_id');
    }

   

     public function levels()
    {
        return $this->hasMany(LevelModel::class, 'sub_category_id');
    }
}
