<?php

use Illuminate\Http\Request;

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    \App\Models\Contact::create($request->all());
    return view('success');
});

Route::get('/contacts-list', function () {
    $contacts = \App\Models\Contact::all();
    return view('contacts-list', ['contacts' => $contacts]);
});

Route::get('/delete/{id}', function ($id) {
    \App\Models\Contact::find($id)->delete();
    return redirect('/contacts-list');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});