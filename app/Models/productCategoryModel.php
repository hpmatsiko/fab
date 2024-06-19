<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCategoryModel extends Model
{
    use HasFactory;
    protected $fillable = ['product_category','locale'];
    protected $table = 'category';

    public function subCategories()
    {
        return $this->hasMany(SubCategoryModel::class, 'category_id');
    }
}
