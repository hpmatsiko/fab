<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();

        $content = ContentModel::where('locale', app()->getLocale())->get();
        return view('auth.login', compact('productCategories','content'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        if ($request->user()->usertype === 'admin') {
          return redirect('admin/dashboard');  
      }

      elseif ($request->user()->usertype === 'user') {
          return redirect('user/dashboard');  
      }

      elseif ($request->user()->usertype === 'teacher') {
          return redirect('admin/Tdashboard');  
      }


  }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

         return redirect('login')->with('suc', __('messages.logged_out'));
    }
}
