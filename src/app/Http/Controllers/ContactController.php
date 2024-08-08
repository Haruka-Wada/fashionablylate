<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //お問い合わせフォームの入力画面表示
    public function index() {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts','categories'));
    }

    //お問い合わせフォームの確認画面表示
    public function confirm(ContactRequest $request) {
        $categories = Category::all();
        $category = Category::find($request->category_id);
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building',  'category_id', 'detail']);
        return view('confirm', compact('contact', 'category'));
    }

    //お問い合わせの登録、修正ボタンが押された場合の処理
    public function store(Request $request) {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);

        //修正ボタンが押された場合
        if ($request->input('back') == 'back') {
            $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'category_id', 'detail']);
            return redirect('/')->withInput();
        }

        //送信ボタンが押された場合
        Contact::create($contact);
        return view('/thanks');
    }

    //userのログイン画面表示
    public function login() {
        return view('users.login');
    }

    //userがログインできた場合のデータ画面表示
    public function admin() {
        $contacts = Contact::with('category')->get();
        return view('users.admin', compact('contacts'));
    }
}
