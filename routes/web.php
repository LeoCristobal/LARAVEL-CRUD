<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;

Route::get('/add-employer', function () {

    return view('index');
});

Route::get('/employers', function (){

    return view('employers', [
        'employers' => Employer::latest()->simplePaginate(5)
    ]);
});

Route::post('/add-employer', function () {
        request()->validate([
        'name' => ['required', 'min:3'],
        'salary' => ['required'],
        'phone_number' => ['required'],
        'email' => ['required'],
    ]);
    Employer::create([
        'name' => request('name'),
        'salary' => request('salary'),
        'phone_number' =>  request('phone_number'),
        'email' => request('email'),

    ]);
    return redirect('/employers');
});



Route::get('/employer/update/{id}', function ($id) {
    $employer = Employer::findOrfail($id);
    return view('update', [
        'employer' => $employer
    ]);
});

Route::patch('/employer/update/{id}', function ($id) {
    request()->validate([
        'name' => ['required', 'min:3'],
        'salary' => ['required'],
        'phone_number' => ['required'],
        'email' => ['required'],
    ]);

    $employer = Employer::findOrFail($id);
    $employer->update([
      'name' => request('name'),
      'salary' => request('salary'),
      'phone_number' =>  request('phone_number'),
      'email' => request('email'),
    ]);

    return redirect('/employers');
});

Route::delete('/employer/delete/{id}', function ($id) {
    Employer::findOrfail($id)->delete();

    return redirect('/employers');

});


