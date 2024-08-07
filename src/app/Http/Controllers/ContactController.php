<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts','categories'));
    }

    public function confirm(Request $request) {
        $categories = Category::all();
        $category = Category::find($request->category_id);
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building',  'category_id', 'detail']);
        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request) {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);
        Contact::create($contact);
        return view('/thanks');

        //修正ボタンが押された場合
        if($request->input('back') == 'back') {
            return redirect('/')->withInput();
        }

    }
}
