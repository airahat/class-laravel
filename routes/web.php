<?php

use Illuminate\Support\Facades\Route;
use App\Models\Trainee;
use App\Http\Controllers\TraineeController;

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

Route::get('/trainees', [TraineeController::class, 'index']);
Route::get('/trainees/{id}', [TraineeController::class, 'show']);


// Route::get('/trainees/{id}/', function ( $id, ) {  


    
//     return view('pages.trainees.show',
//     ["trainee"=>Trainee::findTrainee($id)]   );
// });