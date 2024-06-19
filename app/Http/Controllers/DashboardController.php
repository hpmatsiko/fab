<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;
use App\Models\User;
use App\Models\LevelModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
        // Retrieve all product categories along with their sub-categories
    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();

        // Pass the data to a view
    return view('admin.dashboard', compact('productCategories'));
}

public function userd()
{

    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
    $content = ContentModel::where('locale', app()->getLocale())->get();
    return view('dashboard',compact('productCategories','content')); 
}

public function showu(productCategoryModel $category)
{
    $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();

    $subcategories = SubCategoryModel::where('category_id', $category->id)->where('locale', app()->getLocale())->get();
    $levels = LevelModel::where('sub_category_id', $subcategories->pluck('id'))->where('locale', app()->getLocale())->get();
    $products = productModel::whereIn('level_id', $levels->pluck('id'))->where('locale', app()->getLocale())->get();
    $content = ContentModel::where('locale', app()->getLocale());
    return view('user.show', compact('productCategories','subcategories','category', 'products','content','levels'));
}




public function ChooseCat()
{

    $productCategories = productCategoryModel::where('locale', app()->getLocale())->get();
        // Pass the data to a view
    return view('admin.ChooseCat',compact('productCategories'));
}



public function CatL()
{

    $productCategories = productCategoryModel::where('locale', app()->getLocale())->get();
        // Pass the data to a view
    return view('admin.CategoryL',compact('productCategories'));
}


public function SubCatL()
{

    $productCategories = productCategoryModel::with('subCategories')->where('locale', app()->getLocale())->get();
        // Pass the data to a view
    return view('admin.SubCatL',compact('productCategories'));
}

public function Levels()
{

    $productCategories = productCategoryModel::with('subCategories.levels')->where('locale', app()->getLocale())->get();
        // Pass the data to a view
    return view('admin.Levels',compact('productCategories'));
}




public function ChooseLevel()
{

   $levels = LevelModel::where('locale', app()->getLocale())->get();
        // Pass the data to a view
   return view('admin.ChooseLevel',compact('levels'));
}

public function ChooseSubCatL()
{

    $SubCategories = SubCategoryModel::where('locale', app()->getLocale())->get();
    return view('admin.ChooseSubCatL',compact('SubCategories'));
}


public function addproduct(LevelModel $level)
{

 return view('admin/addproduct',compact('level')); 
}




public function addproductCat()
{
  return view('admin/addproductCat'); 
}

public function addLevel(SubCategoryModel $SubCategory)
{  
        // Pass the data to a view
    return view('admin.addLevel',compact('SubCategory'));
}

public function addSubCat(productCategoryModel $category)
{

  return view('admin/addSubCategory',compact('category')); 
}




public function addWell()
{

    return view('admin/addWel'); 
}



public function addUser()
{

   return view('admin/addUser'); 
}

public function productL()
{
    $productCat=productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
    return view('admin/productL',compact('productCat')); 
}

public function searchi()
{
    return view('search'); 
}


public function UpdateCat(productCategoryModel $cat)
{
  return view('admin/UpdateCat',compact('cat')); 
}


public function UpdateSubCat(SubCategoryModel $subcat)
{
  $productcat=productCategoryModel::where('id', $subcat->category_id)->where('locale', app()->getLocale())->get();
  $allproductcat=productCategoryModel::where('locale', app()->getLocale())->get();
  return view('admin/UpdateSubCat',compact('subcat','productcat','allproductcat')); 
}

public function Updateproduct(productModel $product)
{
    $levels=LevelModel::where('id', $product->level_id)->where('locale', app()->getLocale())->get();
    
    $allLevel=LevelModel::where('locale', app()->getLocale())->get();

    return view('admin.Updateproduct',compact('levels','product','allLevel')); 
}

public function UpdateLevel(LevelModel $level)
{
    $SubCategory=SubCategoryModel::where('id', $level->sub_category_id)->where('locale', app()->getLocale())->get();
    
    $allSubcat=SubCategoryModel::where('locale', app()->getLocale())->get();

    return view('admin.UpdateLevel',compact('level','SubCategory','allSubcat')); 
}





public function UpdateContent(ContentModel $cont)
{
 $content= ContentModel::where('id',$cont->id)->where('locale', app()->getLocale())->get();
 return view('admin/UpdateContent',compact('content','cont')); 
}

public function AllContent()
{
 $content= ContentModel::where('locale', app()->getLocale())->get();
 return view('admin/AllContent',compact('content')); 
}

public function addContent()
{

    return view('admin/addContent'); 
}




}
