<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\productCategoryModel;
use App\Models\SubCategoryModel;
use App\Models\productModel;
use App\Models\ContentModel;

class RegisteredUserController extends Controller
{

    // public function home()
    // {
    //   return view('welcome'); 
    // }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $productCategories = productCategoryModel::with('subCategories.levels.products')->where('locale', app()->getLocale())->get();
        $content = ContentModel::where('locale', app()->getLocale())->get();
        return view('auth.register',compact('productCategories','content'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['nullable', 'string'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:20'],
        ]);

        $user = User::create([

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'usertype' => $request->usertype,

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('verification.notice', absolute: false));
    }

   

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
