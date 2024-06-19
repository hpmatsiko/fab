<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
        $content = ContentModel::where('locale', app()->getLocale())->get();
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('login', absolute: false))
                    : view('auth.verify-email',compact('productCategories','content'));
    }
}
