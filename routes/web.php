<?php

use Illuminate\Support\Facades\Route; // it (Facades) is used to import class and method.
use App\Http\Controllers\MyController;  // importing controller


Route::get('/', function () {     // Route is a class, get is a method
    return view('welcome');
});

Route::get('/home', function () {
    return ('<h1> Welcome To Home Page! </h1>');      // HTML
});

Route::get('/home2', function () {
    return ('<h1 style="color:red; background-color: black"> Inline CSS Applied </h1>');     // Inline css
});

Route::get('home3', function () {
    return '<script>alert("Hello from JS")</script>';        // JavaScript 
});

Route::get('home4', function () {           // Unordered List
    return '
    <ul>
        <li>Apple</li>
        <li>Mango</li>
        <li>Banana</li>
    </ul>';
});

Route::get('home5', function () {          // Table
    return '<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Vishal</td>
            <td>Varanasi</td>
        </tr>
    </tbody>
    </table>';
});

// View route without parameter
Route::view('/welcome', 'welcome');

// View route with parameter
Route::view('/welcome', 'welcome', ['name' => 'Taylor']); 

//-------------------------------------------------------
// acessing files res > views 
Route::get('view', function() {
    return view('home');
});

Route::get('/student', function() {
    return view('user');
});

// ----------- passing data in views -----------------
// four types -- array, compact, with and withName

// array
Route::get('/array', function() {
    $name = 'VKC through array';
    return view('user', ["name" => $name]);
});

// compact
Route::get('/compact', function() {
    $name = 'VKC through compact';
    return view('user', compact("name"));
});

// compact
Route::get('/compact1', function() {
    $x = 10;
    $y = 20;
    return view('user', compact("x", "y"));
});

// with
Route::get('/with', function() {
    $x = 100;
    $y = 200;
    return view('user')-> with("x", $x)-> with("y", $y);
});

// withName
Route::get('/withname', function() {
    $x = 1000;
    $y = 2000;
    return view('user')-> withX($x)-> withY($y);
});

// JSON, Headers, Cookies, Redirectional


// controller
Route::get('/displaymessage', [mycontroller::class, 'display']);
Route::get('/showmessage', [mycontroller::class, 'showMessage']);
