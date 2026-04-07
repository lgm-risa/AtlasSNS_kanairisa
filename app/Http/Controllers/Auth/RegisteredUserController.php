<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // ▼この処理後画面を移動
    public function store(Request $request): RedirectResponse
    {
        // バリデーション設定
        $validated=$request->validate([
            'email'=>'required|unique:users|email|min:5|max:40',
            'username'=>'required|min:2|max:12',
            'password'=>'required|alpha_num|min:8|max:20|confirmed',
            'password_confirmation'=>'required'
        // ],
        // [
        //     'email.required'=>'メールアドレスは入力必須です。',
        //     'email.unique'=>'既に登録されています。'
        ]);
        // ▼フォームで入力された内容をusersテーブルに保存
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make
            // ※パスワードそのまま保存しないため
            ($request->password),
        ]);
        session(['username' =>$request->username]);
// ▼addedのURLへ移動する
        return redirect('added');

    }


    public function added(): View
    {
        return view('auth.added');
    }
}
