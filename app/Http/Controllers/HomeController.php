<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;
use App\Models\LevelModel;


class HomeController extends Controller
{

  public function show(productCategoryModel $category)
  {
    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();

    $subcategories = SubCategoryModel::where('category_id', $category->id)->where('locale', app()->getLocale())->get();
    $levels = LevelModel::where('sub_category_id', $subcategories->pluck('id'))->where('locale', app()->getLocale())->get();
    $products = productModel::whereIn('level_id', $levels->pluck('id'))->where('locale', app()->getLocale())->get();
    $content = ContentModel::where('locale', app()->getLocale());
    return view('show', compact('productCategories','subcategories','category', 'products','content','levels'));
  }

  public function index()
  {
    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
    $content = ContentModel::where('locale', app()->getLocale())->get();
    return view('welcome',compact('productCategories','content')); 
  }
  public function viewproduct(productModel $product)
  {
    $content = ContentModel::where('locale', app()->getLocale());
    // Retrieve product categories (assuming you need them in the view)
    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
// Retrieve level for the given product
    $levels = LevelModel::where('id', $product->level_id)->where('locale', app()->getLocale())->first();
    // Retrieve subcategory for the given product
    $subCat = SubCategoryModel::where('id', $levels->sub_category_id)->where('locale', app()->getLocale())->first();

    // Retrieve category for the subcategory
    $category = productCategoryModel::where('id', $subCat->category_id)->where('locale', app()->getLocale())->first();

  

    return view('user.viewproduct', compact('productCategories', 'product','category', 'subCat','content','levels'));
  }


}
