<?php

use Illuminate\Support\Facades\Route;

Route::post('/', function () {return view('posts');});

Route::post('/addPostForm', function() {return view('addPostForm');});

