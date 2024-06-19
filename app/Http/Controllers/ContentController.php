<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentModel;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    public function saveContent(Request $request)
{
    // Validation rules
  $rules = [
    'content' => 'required|string',
       
    ];

    // Custom validation messages
    $messages = [
       'content.required' => 'The field is required.',
       
   ];

    // Validate the request data
   $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
   if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
       return redirect()->back()->withErrors($validator)->withInput();
   }

    // If validation passes, save the data
   $data =new ContentModel();
   $data->content = $request->content;
   $data->locale = $request->locale;
   $data->save();

    // Redirect back with success message
   return redirect()->back()->with('suc', 'Contents saved successfully');
}

    public function UpdateContent(Request $request, $cont)
{
    // Validation rules
  $rules = [
    'content' => 'required|string',
       
    ];

    // Custom validation messages
    $messages = [
       'content.required' => 'The field is required.',
   ];

    // Validate the request data
   $validator = Validator::make($request->all(), $rules, $messages);

    // Check if the validation fails
   if ($validator->fails()) {
        // If validation fails, redirect back with errors and old input
       return redirect()->back()->withErrors($validator)->withInput();
   }

    // If validation passes, save the data
   $data = ContentModel::find($cont);
   $data->content = $request->content;
   $data->locale = $request->locale;
   $data->save();

    // Redirect back with success message
   return redirect()->back()->with('suc', 'Contents updated successfully');
}

public function destroy($cont)
{
    // Attempt to find the content by ID
    $content = ContentModel::find($cont);

    // Check if content exists
    if ($content) {
        // Delete the content
        $content->delete();

        // Redirect back with success message
        return redirect()->back()->with('suc', 'Content deleted successfully');
    }

    // Redirect back with error message if content not found
    return redirect()->back()->with('err', 'Content not found');
}
}
