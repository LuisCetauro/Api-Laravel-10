<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;



Route::get("/Albums",[AlbumController::class, "TodosAlbums"]);
Route::get("/Albums/{nome}",[AlbumController::class,"UmAlbum"]);
Route::post("/Albums",[AlbumController::class, "AdicionarAlbum"]);
Route::delete("/Albums/{nome}",[AlbumController::class, "DeletarAlbum"]);

Route::get("/Songs",[SongController::class,"TodosSongs"]);
Route::get("/Songs/{nome}",[SongController::class,"UmSong"]);
Route::post("/Songs",[SongController::class,"AdicionarSong"]);
Route::delete("/Albums/{albumNome}/Songs/{songNome}", [SongController::class, "DeletarSong"]);



