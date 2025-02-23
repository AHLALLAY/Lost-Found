<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Page d'accueil
Route::get('/', [PostController::class, 'index']);

// Afficher le formulaire de création
Route::get('/addPostForm', [PostController::class, 'showPostForm']);

// Soumettre le formulaire de création
Route::post('/addPost', [PostController::class, 'addPost']);