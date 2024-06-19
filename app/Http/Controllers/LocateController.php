<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; 
use Illuminate\Support\Facades\Session;

class LocateController extends Controller
{
    public function setLocale($locale)
    {
      if (in_array($locale, ['en', 'fr', 'kin'])) {
        session(['locale' => $locale]);

        return redirect()->route('/');
   }


   
}

}