<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{zone?}', function ($z = 'Day') {
    echo "Good " . $z;
});

Route::get('/calc', function () {
    $a = 12;
    $b = 12;
    $c = $a + $b;
    echo $c;
});
Route::get('/myMessage', function () {
    echo "Do not try to touch <br><br>";
    echo "To Walk In The Morning Is Good For Health";
});

Route::any('/demo', function () {
    echo "testing the route";
});

Route::get('/test', function () {
    return view('test');
});

// Route::put('users/{id}', function ($id) {

// });

// Route::patch();

// Route::delete('users/{id}', function ($id) {

// });

Route::get('/addition/{num1}/{num2}', function ($num1, $num2) {
    echo $num1 + $num2;
});


Route::get('/greet/{username?}', function ($name = 'User') {
    echo "Hello " . $name;
});

Route::get('/check-leap-year/{year}', [PostController::class, 'checkLeapYear'])->name('LeapYear');

Route::get('/check-leap-year/{year}', function ($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo $year . " " . " is leap year";
    } else {
        echo $year . " " . " is not a leap year";
    }
});

Route::get('/isTriangle/{val1}/{val2}/{val3}', function ($a, $b, $c) {
    if ($a + $b + $c == 180) {
        echo "Shape is triangle";
    } else {
        echo "Shape is unidentified";
    }
});

Route::get('/isSquare/{val1}/{val2}/{val3}/{val4}', function ($a, $b, $c, $d) {
    if ($a + $b + $c + $d == 360) {
        echo "Shape is Square";
    } else {
        echo "Inappropriate shape";
    }
});

Route::get('/post', function () {
    // return view('post');
    return "<h1>Our Post Page</h1>";
});

Route::view('/post', 'post');

Route::get('/demo/first-post', function () {
    return view("first-post");
});

Route::view('/demo', 'first-post');

// Route::view('/user-list', 'users/index');

Route::get('/hello', function () {
    return view("hello");
});

Route::view('/hello', 'hello');

Route::get('/txt/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
});

Route::get('/txt/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1><h3>" . "$comment" . "</h3>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
});

Route::get('/txt/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
})->whereNumber('id');

Route::get('/txt/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
})->whereAlpha('id');

Route::get('/txt/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
})->whereAlphaNumeric('id');

Route::get('/txt/{id}', function (string $id) {
    if ($id) {
        return "<h1>Post ID: " . "$id" . "</h1>";
    } else {
        return "<h1>Id Not Found</h1>";
    }
})->whereIn('id', ['1', '2', '3']);

Route::get('/category/{category}', function (string $category) {
    echo $category;
})->whereIn('category', ['movie', 'song', 'painting']);

Route::get('/user/{id}', function (string $id) {
    echo $id;
})->whereUuid('id');

Route::get('/user/{id}', function (string $id) {
    echo $id;
})->whereUlid('id');


Route::get('/print-name', function (Request $request) {
    print_r($request->all());
});

Route::get('users/edit', function (Request $request) {
    echo $request->id;
});


// Route::get('/user/{name}', function ($name) {
//     echo $name;
// })->where('name', '[A-Za-z]+');


Route::get('/hello/{name}/{id}', function (Request $request, $name, $id) {
    // print_r($request->all($name,$id));
    echo $request->name;
    echo "<br>";
    echo $request->id;
})->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);

Route::get('/learn-route-basics', function () {
    return view('demo');
})->name('demo-page');

Route::get('/kalu-ji/{color}', function ($color) {
    return view('first-post');
})->name('my-first-post-page');


Route::get('/Rahul-kumar', function () {
    return view('first');
})->name('white');

Route::get('/Kumar-karn', function () {
    return view('second');
})->name('green');

Route::get('/boys/{Name}/{age}', function ($n, $a) {
    return view('boys-page', ['boyName' => $n, 'boyAge' => $a]);
})->name('boys-page');

Route::post('/boys-data', function (Request $request) {
    echo $request->name;
    echo $request->age;
})->name('submit-boys-data');



Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('index', function () {
        echo "User Index Page";
    })->name('index');

    Route::get('create', function () {
        echo "User Create Page";
    })->name('create');

    Route::get('edit', function () {
        echo "User Edit Page";
    })->name('edit');

    Route::get('detail', function () {
        echo "User Detail Page";
    })->name('detail');
});

Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
    Route::get('index', function () {
        echo "Post Index Page";
    })->name('index');

    Route::get('create', function () {
        echo "Post Create Page";
    })->name('create');

    Route::get('edit', function () {
        echo "Post Edit Page";
    })->name('edit');

    Route::get('detail', function () {
        echo "Post Detail Page";
    })->name('detail');
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('index', function () {
        echo "Product Index Page";
    })->name('index');

    Route::get('create', function () {
        echo "Product Create Page";
    })->name('create');

    Route::get('edit', function () {
        echo "Product Edit Page";
    })->name('edit');

    Route::get('detail', function () {
        echo "Product Detail Page";
    })->name('detail');
});

Route::get('/Rahul-kr', function () {
    return view('first');
})->name('white');

Route::get('/Kr-karn', function () {
    return view('second');
})->name('green');

// Redirecting 2nd URL To 1st URL if name of url is changed:-

Route::redirect('/Rahul-kumar', url('/Rahul-kr'));
Route::redirect('/Kumar-karn', url('/Kr-karn'));

// Prefix Route:-

Route::prefix('page')->group(function () {

    Route::get('/rahul', function () {
        return view('RAHUL');
    })->name('karn');

    Route::get('/kumar', function () {
        return view('KUMAR');
    })->name('rahul');

    Route::get('/karn', function () {
        return view('KARN');
    })->name('kumar');
});

Route::group(['prefix' => 'web', 'as' => 'page/'], function () {
    Route::get('/rahul', function () {
        return view('RAHUL');
    })->name('karn');

    Route::get('/kumar', function () {
        return view('KUMAR');
    })->name('rahul');

    Route::get('/karn', function () {
        return view('KARN');
    })->name('kumar');
});

Route::get('/fall-back', function () {
    return "<center><h1>404 | Page Not Found</h1></center>";
})->name('fallback');


Route::get('user-page/{name}/{age}', function ($name, $age) {
    return view('user');
})->name('user_page');

Route::get('admin-page', function () {
    return view('admin');
})->name('admin_page');

// Order CRUD Routes
Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
    Route::get('delete', function () {
        echo "Delete Page";
    })->name('delete'); //order.delete

    Route::get('index', function () {
        echo "Order List Page";
    })->name('index');

    Route::get('create', function () {
        echo "Order Create Page";
    })->name('create');

    Route::get('edit', function () {
        echo "Order Edit Page";
    })->name('edit');
});

Route::group(['prefix' => 'cart', 'as' => 'cart.', 'middleware' => ['voterEligibility', 'auth']], function () {
    Route::get('delete', function () {
        echo "Delete Page";
    })->name('delete');

    Route::get('index', function () {
        echo "Order List Page";
    })->name('index');

    Route::get('create', function () {
        echo "Order Create Page";
    })->name('create');

    Route::get('edit', function () {
        echo "Order Edit Page";
    })->name('edit');
});

// Route::prefix('cart')->as('cart.')->group(function () {
// });

Route::get('check-voter-eligible', function () {
    echo "eligible";
})->name('checkVoterEligibility')->middleware('voterEligibility');

Route::get('/apply-for-dl', function () {
    return view('apply-dl');
});

Route::post('/dl-in-progress', function () {
    echo "Dl Work in progress";
})->middleware('checkDlEligibility')->name('check-dl-eligibility');

Route::get('/failed-dl', function () {
    echo "You are not eligible";
})->name('failed-dl');


Route::get('profile', function () {
    echo "Profile Page";
})->middleware('auth');

Route::get('inbox', function () {
    echo "Inbox Page";
})->middleware('auth');

Route::get('sent', function () {
    echo "Sent Page";
})->middleware('auth');

Route::get('login', function () {
    echo "Login Page";
})->name('login');

Route::get('/cool', function () {
    echo "You Are Allowed To Go Ahead";
})->middleware('checkCondition');

Route::get('/merit-list', function () {
    return view('list');
})->middleware('Eligible');

Route::get('/list', function () {
    return view('check');
})->name('merit');


Route::prefix('test')->group(function () {

    Route::get('/application', function () {
        return view('application');
    })->name('fill-application');

    Route::get('/marks', function () {
        return view('Marks2');
    })->middleware('MARKS')->name('mark');

    Route::get('/marks2', function () {
        return view('Marks');
    })->name('mark2');

    Route::get('/marks3/{o}', function ($p) {
        return view('Marks3');
    })->name('mark3');
});

Route::get('create-user/{user}', [UserController::class, 'create'])->name('create-user');

Route::post('store-user', [UserController::class, 'store'])->name('store-user')->middleware('MARKS');

Route::get('/create-post', [PostController::class, 'createPost']);

Route::get('/delete-post/{postID}', [PostController::class, 'deletePost']);

Route::prefix('check')->middleware('verifyNumber')->group(function () {
    Route::get('add/{num1}/{num2}', [NumberController::class, 'addNum']);
    Route::get('sub/{num1}/{num2}', [NumberController::class, 'subNum']);
    Route::get('multiply/{num1}/{num2}', [NumberController::class, 'multiplyNum']);
    Route::get('divide/{num1}/{num2}', [NumberController::class, 'divideNum']);
});
Route::get('/invalid-number-error', [NumberController::class, 'invalidNumberError'])->name('invalidNumberError');



Route::prefix('check')->group(function () {
    Route::get('register', [PageController::class, 'registerPage'])->name('Registration');
    Route::get('login', [PageController::class, 'loginPage'])->name('Login');
    Route::get('loggedIn', [PageController::class, 'loggedInPage'])->name('LoggedIn')->middleware('VerifyAge');
    // Route::get('dashboard', [PageController::class, 'dashboardPage'])->name('Dashboard');
    Route::get('logout', [PageController::class, 'logoutPage'])->name('Logout');
    Route::get('ageconfirmation', [PageController::class, 'confirmAge'])->name('Confirm-Age');
});

Route::get('/user-list', [UserController::class, 'index'])->name('userList');

Route::get('/welcome/{name}', [UserController::class, 'demo'])->name('Demo');
// Route::get('/welcome/{name}','UserController@demo');

Route::get('/example', [UserController::class, 'example_fun']);
Route::get('/practice/{num}', [UserController::class, 'practice_fun']);

Route::get('/student/{admissionNo}', [UserController::class, 'studentAddmission']);
Route::get('/temporary-student', [UserController::class, 'temporaryStudentAddmission']);

Route::get('/classTest/{number?}', [UserController::class, 'testNumber']);
Route::get('/schoolTest/{schoolNum?}', [UserController::class, 'schoolNumber']);

Route::get('product-form', [UserController::class, 'formMethod']);
Route::get('apply-coupon', [UserController::class, 'applyCoupon'])->name('apply-coupon');

Route::get('market', [UserController::class, 'marketMethod']);
Route::get('items', [UserController::class, 'price'])->name('mall-items');
Route::get('/loop', [UserController::class, 'loops']);


// Bloging System
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
});


Route::group(['prefix' => 'ankit', 'as' => 'ankit'], function () {
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
    });
});
