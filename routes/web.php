<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', [ComicController::class, "index"]);


// CREATE 

Route::get("/comic/create", [ComicController::class, "create"])->name("comic.create");
Route::post("/comic", [ComicController::class, "store"])->name("comic.store");

// READ
Route::get("/", [ComicController::class, "index"])->name("comic.index");
Route::get("/comic/{comic}", [ComicController::class, "show"])->name("comic.show");

// UPDATE

Route::get("/comic/{comic}/edit", [ComicController::class, "edit"])->name("comic.edit");
// edit manda le modifiche a put / patch 
Route::put("/comic/{comic}", [ComicController::class, "update"])->name("comic.update");

//DESTROY

Route::delete("/comic/{comic}", [ComicController::class, "destroy"])->name("comic.destroy");