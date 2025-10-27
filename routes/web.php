<?php

use Illuminate\Support\Facades\Route;
use App\Models\Trainee;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.welcome');
});
// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/contact', function () {
    return view('pages.contact',
[
    "name" => "Rahat",
    "email" => "rahat@example.com",
    "message" => "Hello, this is a test message."

]

);
});

Route::get('/users/{username}/profile/{id?}', function ($username, $id=null) {  
    return view('pages.users', ["user" => $username, "id" => $id]);
});
// Route::get('/trainees', function () {

//     return view(   'pages.trainees.index', 
//     ['trainees'=>Trainee::all() ]
    
//     );
// });

Route::get('/trainees', [TraineeController::class, 'index'])->name("trainees.index");
Route::get('/trainees/{id}', [TraineeController::class, 'show'])->name("trainees.show");

Route::get('/roles', [RolesController::class, 'index'])->name("roles.index");
Route::get('/roles/{id}', [RolesController::class, 'show'])->name("roles.show");
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show'])->name("users.show");;


// Route::get('/trainees/{id}/', function ( $id, ) {  


    
//     return view('pages.trainees.show',
//     ["trainee"=>Trainee::findTrainee($id)]   );
// });