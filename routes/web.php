<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/booking', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
    ]);
    
    return redirect()->back()->with('success', 'Cảm ơn bạn đã đăng ký đặt tour! Hanna Travel sẽ liên hệ lại với bạn trong vòng 15 phút.');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
    ]);
    
    return redirect()->back()->with('success', 'Thông tin liên hệ của bạn đã được gửi đi thành công. Chúng tôi sẽ phản hồi sớm nhất có thể!');
});
