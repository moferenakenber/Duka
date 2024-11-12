<?php

use App\Http\Controllers\{Auth\LoginController,
    Auth\RegisterController,
    CartController,
    CustomersController,
    ItemController,
    ItemsController,
    ProjectController,
    SessionsController,
    UserController,
    Dashboard,
    TaskController};
        use Illuminate\Support\Facades\Route;
        use Illuminate\Http\Request;
        use App\Models\User;

        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Register web routes for your application here. These routes are loaded
        | by the RouteServiceProvider within a group containing the "web" middleware.
        |
        */

            # Public Routes

            Route::get('/', function () {
                return view('login');
            })->name('login');

//            Route::get('/login', function () {
//                return view('login');
//            })->name('login');



//            Route::post('/session', [SessionsController::class, 'store']);


                        // Auth Routes
            Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
            Route::post('/login', [LoginController::class, 'login']);
            Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

            Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
            Route::post('/register', [RegisterController::class, 'register']);







            Route::get('/resetpassword', function () {
                return view('resetpage');
            })->name('reset');

            Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
            Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');

            Route::get('/signup', function () {
                return view('signup');
            })->name('signup');

            Route::post('/signup', [UserController::class, 'store']);

            # Additional Routes

            Route::get('/login/forgot-password', [ResetController::class, 'create']);
            Route::post('/forgot-password', [ResetController::class, 'sendEmail']);


            Route::get('/register', [RegisterController::class, 'create']);
            Route::post('/register', [RegisterController::class, 'store']);

        # Authenticated Routes

// Protected Routes
Route::group(['middleware' => 'auth'], function () {

            # Session and User Management

            Route::get('/test-auth', function () {
                dd(auth()->user());
            });

//            Route::delete('/session', [SessionsController::class, 'destroy'])->name('logout');

            # Dashboard and Profile

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            Route::get('/userprofile', function () {
                return view('userprofile');
            })->name('userprofile');

            Route::get('/usermanagment', function () {
                return view('usermanagment');
            })->name('usermanagment');


            # Customer and Item Management

            //            Route::get('/customers', function () {
            //                return view('customers');
            //            })->name('customers');

            Route::resource('/customers', CustomersController::class);

            Route::get('/items', function () {
                return view('items');
            })->name('items');

            Route::resource('item', ItemController::class);

            # Cart Management
            //
            //                    Route::get('/carts', [CartController::class, 'index'])->name('carts.index'); // View all carts
            //                    Route::get('/carts/create', [CartController::class, 'create'])->name('carts.create'); // Form to create a cart
            //                    Route::post('/carts', [CartController::class, 'store'])->name('carts.store'); // Store a new cart
            //                    Route::get('/carts/{cart}', [CartController::class, 'show'])->name('carts.show'); // Show single cart details

            Route::get('/carts', [CartController::class, 'index'])->name('carts.index'); // View all carts
            Route::get('/carts/create', [CartController::class, 'create'])->name('carts.create'); // Form to create a cart
            Route::post('/carts', [CartController::class, 'store'])->name('carts.store'); // Store a new cart
            Route::get('/carts/{cart}', [CartController::class, 'show'])->name('carts.show'); // Show single cart details


            //Route::post('cartitems', [CartItemController::class, 'addItemToCart'])->name('cartitems.addItemToCart');
            // If you're adding items to a specific cart, this is a separate route
            Route::post('/carts/{cart}/items', [CartController::class, 'addItem'])->name('cart.items.store'); // Add item to a specific cart


            # Additional Management Views

            Route::get('/stock', function () {
                return view('stock');
            })->name('stock');

            Route::get('/sales', function () {
                return view('sales');
            })->name('sales');

            Route::get('/purchases', function () {
                return view('purchases');
            })->name('purchases');

            # Project and Task Management
            Route::resource('/projects', ProjectController::class);
            Route::resource('/tasks', TaskController::class);

            Route::get('/calendar', function () {
                return view('calendar');
            })->name('calendar');


            # Reports and Alerts
            Route::get('/reports', function () {
                return view('components.report');
            });

            Route::get('/alert', function () {
                return view('dashboard');
            });

            # Miscellaneous and Testing

            Route::get('/dashboardtest', function () {
                return view('dashboardtest');
            })->name('dashboardtest');

            Route::get('/test', function () {
                return view('test');
            });

            Route::get('/testcalendar', function () {
                return view('testcalendar');
            });

            # Sample Routes for Model Testing

            Route::get('/model/{user}', function (User $user) {
                return response()->json(['name' => 'Abigail', 'state' => 'CA']);
            });

            Route::get('/greeting', function () {
                $my_array = ['array1', 'array2', 'array3', 'array4', 'array5'];
                return view('test/greeting')
                    ->with('name', 'yonathan')
                    ->with('array', $my_array);
            });

            # Routes without 'auth' middleware for testing purposes

            Route::get('/test', function () {
                return view('test');
            });

            Route::get('/testcalendar', function () {
                return view('testcalendar');
            });

            # Optional Parameter Example

            Route::get('/user/{name?}', function (?string $name = null) {
                return $name;
            });

            # Other Examples (add more as necessary)

            Route::get('/user/{id}/{name}', function (string $id, string $name) {
                return "User ID: $id, Name: $name";
            })->whereNumber('id')->whereAlpha('name');
        });


        //
        //use App\Http\Controllers\CartController;
        //use App\Http\Controllers\ItemController;
        //use App\Http\Controllers\ItemsController;
        //use App\Http\Controllers\ProjectController;
        //use Illuminate\Support\Facades\Route;
        //use Illuminate\Http\Request;
        //use App\Http\Controllers\SessionsController;
        //use App\Http\Controllers\UserController;
        //use App\Http\Controllers\Dashboard;
        //use App\Models\User;
        ////use App\View\Components\Alert;
        ////use App\View\Components\report;
        //use App\Http\Controllers\TaskController;
        //
        //
        //
        ///*
        //|--------------------------------------------------------------------------
        //| Web Routes
        //|--------------------------------------------------------------------------
        //|
        //| Here is where you can register web routes for your application. These
        //| routes are loaded by the RouteServiceProvider and all of them will
        //| be assigned to the "web" middleware group. Make something great!
        //|
        //*/
        //
        //        // Public Routes
        //
        //        Route::get('/', function () {
        //        return view('login');
        //        })->name('login');
        //
        //        Route::get('/login', function () {
        //        return view('login');
        //        })->name('login');
        //
        //
        //
        //Route::middleware('auth')->group(function () {
        //
        //        Route::post('/session', [SessionsController::class, 'store']);
        //
        //        Route::get('/signup', function () {
        //            return view('signup');
        //            })->name('signup');
        //
        //        Route::post('/signup', [UserController::class, 'store']);
        //
        //        Route::get('/resetpassword', function () {
        //            return view('resetpage');
        //            })->name('reset');
        //
        //       // Route::get('/dashboard', [Dashboard::class, 'app'])->name('app');
        //
        //        Route::get('/dashboard', function () {
        //            return view('dashboard');
        //        })->name('dashboard');
        //
        //        Route::get('/userprofile', function () {
        //            return view('userprofile');
        //            })->name('userprofile');
        //
        //        Route::get('/usermanagment', function () {
        //            return view('usermanagment');
        //            })->name('usermanagment');
        //
        //        Route::get('/customers', function () {
        //            return view('customers');
        //            })->name('customers');
        //
        //        Route::get('/items', function () {
        //            return view('items');
        //            })->name('items');
        //
        ////        Route::post('/items', [ItemsController::class, 'store']);
        //
        //        Route::resource('item', ItemController::class);
        //
        //        Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
        //
        //
        //
        //        Route::get('/stock', function () {
        //            return view('stock');
        //        })->name('stock');
        //
        //        Route::get('/carts', function () {
        //            return view('carts');
        //            })->name('carts');
        //
        //        Route::get('/sales', function () {
        //            return view('sales');
        //            })->name('sales');
        //
        //        Route::get('/purchases', function () {
        //            return view('purchases');
        //        })->name('purchases');
        //
        //        Route::get('/calendar', function () {
        //            return view('calendar');
        //            })->name('calendar');
        //        Route::resource('/projects', ProjectController::class);
        //        Route::resource('/tasks', TaskController::class);
        //
        //
        //
        //        Route::get('/model/{user}', function (User $user) {
        //            //return $user;
        //            return response()
        //                    ->json(['name' => 'Abigail', 'state' => 'CA']);
        //                    //->withCallback($request->input('callback'));
        //            });
        //
        //        Route::get('/greeting', function () {
        //            $my_array = ['array1', 'array2', 'array3', 'array4', 'array5'];
        //            return view('test/greeting')
        //                    ->with('name', 'yonathan')
        //                    ->with('array', $my_array );
        //            });
        //
        //        Route::get('/reports', function () {
        //            return view('components.report');
        //            });
        //
        //        Route::get('/alert', function () {
        //            return view('dashboard');
        //            });
        //
        //        Route::get('/dashboardtest', function () {
        //            return view('dashboardtest');
        //        })->name('dashboardtest');
        //
        //
        //        Route::get('/test', function () {
        //                    return view('test');
        //                });
        //
        //        Route::get('/testcalendar', function () {
        //            return view('testcalendar');
        //        });
        //
        //        Route::get('/carts', [CartController::class, 'index'])->name('carts.index'); // View all carts
        //        Route::get('/carts/create', [CartController::class, 'create'])->name('carts.create'); // Form to create a cart
        //        Route::post('/carts', [CartController::class, 'store'])->name('carts.store'); // Store a new cart
        //        Route::get('/carts/{cart}', [CartController::class, 'show'])->name('carts.show'); // Show single cart details
        //
        //        // Routes for Cart Items within a Cart
        //        Route::post('/carts/{cart}/items', [CartItemController::class, 'store'])->name('cart.items.store'); // Add item to cart
        //
        //
        //});
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        ////Route::get('/alert', Alert::class);
        //
        //
        //    /*
        //    Route::group(['middleware' => 'auth'], function () {
        //        Route::get('/', function () {
        //        return view('welcome');
        //            });
        //
        //        Route::get('dashboard', function () {
        //                return view('dashboard');
        //            })->name('dashboard');
        //
        //        //Route::get('/login', function () {
        //        //return view('login');
        //        // });
        //
        //        Route::get('userprofile', function () {
        //            return view('userprofile');
        //        })->name('userprofile');
        //
        //        Route::get('usermanagment', function () {
        //            return view('usermanagment');
        //        })->name('usermanagment');
        //
        //        Route::get('customers', function () {
        //            return view('customers');
        //        })->name('customers');
        //
        //        Route::get('items', function () {
        //            return view('item');
        //        })->name('item');
        //
        //        Route::get('carts', function () {
        //            return view('carts');
        //        })->name('carts');
        //
        //        Route::get('sales', function () {
        //            return view('sales');
        //        })->name('sales');
        //
        //        Route::get('calander', function () {
        //            return view('calander');
        //        })->name('calander');
        //
        //        Route::get('tasks', function () {
        //            return view('tasks');
        //        })->name('tasks');
        //
        //        Route::get('/logout', [SessionsController::class, 'destroy']);
        //
        //        Route::post('/login/{username}/password/{password}', function (Request $request, string $username, string $password) {
        //            return 'Username '. $username;
        //        });
        //
        //    //optional parameter
        //
        //        Route::get('/user/{name?}', function (?string $name = null) {
        //            return $name;
        //        });
        //
        //        Route::get(
        //            '/user/profile',
        //            [UserProfileController::class, 'show']
        //        )->name('profile');
        //
        //
        //        Route::get('/user/{id}/profile', function (string $id) {
        //            return $id;
        //        })->name('profile');
        //
        //        Route::get('/users', function (Request $request) {
        //
        //        });
        //
        //        //Route::redirect('/here', '/login');
        //        Route::view('/view', 'view');
        //        Route::view('/viewname', 'viewwithname', ['name' => 'Abebe']);
        //
        //    });
        //    */
        //    /*
        //    Route::group(['middleware' => 'guest'], function () {
        //
        //    */
        //        /*
        //        Route::get('/login', function () {
        //            return view('login');
        //            });
        //        */
        //    /*
        //        Route::get('/register', [RegisterController::class, 'create']);
        //        Route::post('/register', [RegisterController::class, 'store']);
        //        Route::get('/login', [SessionsController::class, 'create']);
        //        Route::post('/session', [SessionsController::class, 'store']);
        //        Route::get('/login/forgot-password', [ResetController::class, 'create']);
        //        Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
        //        Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
        //        Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
        //
        //    });
        //
        //    */
        //    /*
        //    Route::get('/login', function () {
        //        return view('login');
        //        })->name('login');
        //    */
        //
        //    /*
        //    Route::post('/session', [SessionsController::class, 'store']);
        //    */
        //    /*
        //
        //    Route::group(['middleware' => 'auth'], function () {
        //
        //        Route::get('/', [HomeController::class, 'home']);
        //        Route::get('dashboard', function () {
        //            return view('dashboard');
        //        })->name('dashboard');
        //
        //        Route::get('billing', function () {
        //            return view('billing');
        //        })->name('billing');
        //
        //        Route::get('profile', function () {
        //            return view('profile');
        //        })->name('profile');
        //
        //        Route::get('rtl', function () {
        //            return view('rtl');
        //        })->name('rtl');
        //
        //        Route::get('user-management', function () {
        //            return view('laravel-examples/user-management');
        //        })->name('user-management');
        //
        //        Route::get('tables', function () {
        //            return view('tables');
        //        })->name('tables');
        //
        //        Route::get('virtual-reality', function () {
        //            return view('virtual-reality');
        //        })->name('virtual-reality');
        //
        //        Route::get('static-sign-in', function () {
        //            return view('static-sign-in');
        //        })->name('sign-in');
        //
        //        Route::get('static-sign-up', function () {
        //            return view('static-sign-up');
        //        })->name('sign-up');
        //
        //        Route::get('/logout', [SessionsController::class, 'destroy']);
        //        Route::get('/user-profile', [InfoUserController::class, 'create']);
        //        Route::post('/user-profile', [InfoUserController::class, 'store']);
        //        Route::get('/login', function () {
        //            return view('dashboard');
        //        })->name('sign-up');
        //    });
        //
        //
        //
        //    Route::group(['middleware' => 'guest'], function () {
        //        Route::get('/register', [RegisterController::class, 'create']);
        //        Route::post('/register', [RegisterController::class, 'store']);
        //        Route::get('/login', [SessionsController::class, 'create']);
        //        Route::post('/session', [SessionsController::class, 'store']);
        //        Route::get('/login/forgot-password', [ResetController::class, 'create']);
        //        Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
        //        Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
        //        Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
        //
        //    });
        //
        //    Route::get('/login', function () {
        //        return view('session/login-session');
        //    })->name('login');
        //
        //
        //    Route::get('/controller', 'TasksController@index');
        //
        //    */
        //
        //
        //    //$url = route('profile', ['id' => 1]);
        //
        //    /*
        //    Route::get($uri, $callback);
        //    Route::post($uri, $callback);
        //    Route::put($uri, $callback);
        //    Route::patch($uri, $callback);
        //    Route::delete($uri, $callback);
        //    Route::options($uri, $callback);
        //
        //
        //    /*
        //    Route::get('/user/{id}/{name}', function (string $id, string $name) {
        //        // ...
        //    })->whereNumber('id')->whereAlpha('name');
        //
        //    Route::get('/user/{name}', function (string $name) {
        //        // ...
        //    })->whereAlphaNumeric('name');
        //
        //    Route::get('/user/{id}', function (string $id) {
        //        // ...
        //    })->whereUuid('id');
        //
        //    Route::get('/user/{id}', function (string $id) {
        //        //
        //    })->whereUlid('id');
        //
        //    Route::get('/category/{category}', function (string $category) {
        //        // ...
        //    })->whereIn('category', ['movie', 'song', 'painting']);
        //    */
        //
        //
