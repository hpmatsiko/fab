<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;
use App\Models\LevelModel;
class productController extends Controller
{
    
   public function addproductCat()
   {
    return view('admin/addproductCat');
}

public function saveCat(Request $request)
{
  $validatedData = $request->validate([
        'title' => 'required|string|max:255', // Example validation rule for the title field
    ]);
  
  $data= new productCategoryModel();
  $data->product_category=$request->title;
  $data->locale = $request->locale;
  $data->save();
  return redirect()->back()->with('suc','Kategori Nshya Yinjijwe');
}

public function saveSubCat(Request $request)
{
    // Validation rules
  $rules = [
    'sub_category' => 'required|string|max:255',
        'category' => 'required|exists:category,id', // Assuming 'categories' is the table name for categories
    ];

    // Custom validation messages
    $messages = [
     'sub_category.required' => 'The sub category field is required.',
     'category.required' => 'The category field is required.',
     'category.exists' => 'The selected category is invalid.',
 ];

    // Validate the request data
 $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
 if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
     return redirect()->back()->withErrors($validator)->withInput();
 }

    // If validation passes, save the data
 $data = new SubCategoryModel();
 $data->sub_category = $request->sub_category;
 $data->category_id = $request->category;
 $data->locale = $request->locale;
 $data->save();

    // Redirect back with success message
 return redirect()->back()->with('suc', 'Icyiciro Gishya Cyinjijwe');
}

public function saveLevel(Request $request)
{
    // Validation rules
  $rules = [
    'level' => 'required|string|max:255',
        'sub_category_id' => 'required|exists:sub_category,id', // Assuming 'categories' is the table name for categories
    ];

    // Custom validation messages
    $messages = [
     'level.required' => 'The level field is required.',
     'sub_category_id.required' => 'The sub_category field is required.',
     'sub_category_id.exists' => 'The selected sub_category is invalid.',
 ];

    // Validate the request data
 $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
 if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
     return redirect()->back()->withErrors($validator)->withInput();
 }

    // If validation passes, save the data
 $data = new LevelModel();
 $data->level = $request->level;
 $data->sub_category_id = $request->sub_category_id;
 $data->locale = $request->locale;
 $data->save();

    // Redirect back with success message
 return redirect()->back()->with('suc', 'New level added');
}

public function saveproduct(Request $request)
{
    // Validate the incoming request data
    $rules = [

        'pname' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'creator' => 'nullable|string|max:255',
        'color' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB image
        'level_id' => 'required|exists:levels,id' // Valid subcategory ID
    ];

    $messages = [
        'pname.required' => 'The product name is required.',
        'pname.string' => 'The product name must be a string.',
        'pname.max' => 'The product name may not be greater than 255 characters.',

        'price.required' => 'The price is required.',
        'price.numeric' => 'The price must be a numeric value.',

        'description.required' => 'The description is required.',
        'description.string' => 'The description must be a string.',

        'creator.string' => 'The creator must be a string.',
        'creator.max' => 'The creator may not be greater than 255 characters.',

        'color.string' => 'The color must be a string.',
        'color.max' => 'The color may not be greater than 255 characters.',

        'image.image' => 'The file must be an image.',
        'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'image.max' => 'The image may not be greater than 2MB.',

        'level_id.required' => 'The level ID is required.',
        'level_id.exists' => 'The selected level ID is invalid.',
    ];
  // Validate the request data
    $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
    if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
     return redirect()->back()->withErrors($validator)->withInput();
 }
 $product = new productModel();
 $product->pname = $request->pname;
 $product->price = $request->price;
 $product->description = $request->description;
 $product->creator = $request->creator;
 $product->color = $request->color;
 $product->level_id = $request->level_id;
 $product->locale = $request->locale;

    // Handle image upload if exists
 if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('productImages'), $imageName);
    $product->image = $imageName;
}

$product->save();
return redirect()->back()->with('suc', 'Product Gishya Cyinjijwe');


}



public function search(Request $request)
{
    if ($request->ajax()) {
        $searchTerm = $request->search;

        if (!empty($searchTerm)) {
            $data = productModel::where('pname', 'like', '%' . $searchTerm . '%')
            ->where('locale', app()->getLocale())->get();

            $output = count($data) > 0 ? '<h3>products</h3><ol>' : '<h3>No results</h3>';

            if (count($data) > 0) {
                foreach ($data as $row) {
                    $output .= '<a href="' . route('viewproduct',$row->id) . '" class="dropdown-item"><li>' . $row->pname . '</li></a>';
                }
                $output .= '</ol>';
            }

            return response()->json(['html' => $output]);
        }

        return response()->json(['html' => '']);
    }

    return '';
}




public function UpdateCat(Request $request, $cat)
{
  $validatedData = $request->validate([
        'title' => 'required|string|max:255', // Example validation rule for the title field
    ]);
  
  $category= productCategoryModel::find($cat);
  $category->product_category=$request->title;
  $category->locale = $request->locale;
  $category->save();
  return redirect()->back()->with('suc','Kategori Yavuguruwe Neza');
}

public function UpdateSubCat(Request $request, $subcat)
{
    // Validation rules
  $rules = [
    'sub_category' => 'required|string|max:255',
        'category' => 'required|exists:product_category_models,id', // Assuming 'categories' is the table name for categories
    ];

    // Custom validation messages
    $messages = [
     'sub_category.required' => 'The sub category field is required.',
     'category.required' => 'The category field is required.',
     'category.exists' => 'The selected category is invalid.',
 ];

    // Validate the request data
 $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
 if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
     return redirect()->back()->withErrors($validator)->withInput();
 }

    // If validation passes, save the data
 $sub_category = SubCategoryModel::find($subcat);
 $sub_category->sub_category = $request->sub_category;
 $sub_category->category_id = $request->category;
 $sub_category->locale = $request->locale;
 $sub_category->save();

    // Redirect back with success message
 return redirect()->back()->with('suc', 'Sub-category updated successfully');
}


public function updateproduct(Request $request, $product)
{
    // Validate the incoming request data
    $rules = [
        'pname' => 'required|string|max:9000',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'creator' => 'nullable|string|max:255',
        'creator' => 'nullable|string|max:255',
        'color' => 'nullable|string|max:255',
        'published_date' => 'nullable|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB image
        'level_id' => 'required|exists:levels,id' // Valid subcategory ID
    ];

    $messages = [
        'pname.required' => 'The product name is required.',
        'pname.string' => 'The product name must be a string.',
        'pname.max' => 'The product name may not be greater than 255 characters.',

        'price.required' => 'The price is required.',
        'price.numeric' => 'The price must be a numeric value.',

        'description.required' => 'The description is required.',
        'description.string' => 'The description must be a string.',

        'creator.string' => 'The creator must be a string.',
        'creator.max' => 'The creator may not be greater than 255 characters.',

        'creator.string' => 'The creator must be a string.',
        'creator.max' => 'The creator may not be greater than 255 characters.',

        'color.string' => 'The color must be a string.',
        'color.max' => 'The color may not be greater than 255 characters.',

        'published_date.date' => 'The published date must be a valid date format.',

        'image.image' => 'The file must be an image.',
        'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'image.max' => 'The image may not be greater than 2MB.',

        'level_id.required' => 'The level ID is required.',
        'level_id.exists' => 'The selected level ID is invalid.',
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
    if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Find the product by ID
    $product = productModel::find($product);
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Update the product details
    $product->pname = $request->pname;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->creator = $request->creator;
    $product->color = $request->color;
    $product->level_id = $request->level_id;
    $product->locale = $request->locale;

    // Handle image upload if exists
    if ($request->hasFile('image')) {
        // Delete the old image if exists
        if ($product->image && file_exists(public_path('productImages/' . $product->image))) {
            unlink(public_path('productImages/' . $product->image));
        }

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('productImages'), $imageName);
        $product->image = $imageName;
    }

    $product->save();
    return redirect()->back()->with('suc', 'Product Cyavuguruwe Neza');
}




public function UpdateLevel(Request $request, $level)
{
    // Validation rules
  $rules = [
    'level' => 'required|string|max:255',
        'sub_category_id' => 'required|exists:sub_category_models,id', // Assuming 'categories' is the table name for categories
    ];

    // Custom validation messages
    $messages = [
     'level.required' => 'The level field is required.',
     'sub_category_id.required' => 'The sub-category field is required.',
     'sub_category_id.exists' => 'The selected sub-category is invalid.',
 ];

    // Validate the request data
 $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
 if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
     return redirect()->back()->withErrors($validator)->withInput();
 }

    // If validation passes, save the data
 $data = LevelModel::find($level);
 $data->level = $request->level;
 $data->sub_category_id = $request->sub_category_id;
 $data->locale = $request->locale;
 $data->save();

    // Redirect back with success message
 return redirect()->back()->with('suc', 'Level updated successfully');
}


 public function productD($product)
    {
        // Find the product by ID
        $product = productModel::find($product);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Delete the product's image if it exists
        if ($product->image && File::exists(public_path('productImages/' . $product->image))) {
            File::delete(public_path('productImages/' . $product->image));
        }

        // Delete the product from the database
        $product->delete();

        // Redirect back with success message
        return redirect()->back()->with('suc', 'Product deleted successfully.');
    }

}
