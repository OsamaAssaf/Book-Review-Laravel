<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $books = Book::popular('2023-01-01', '2023-12-31')->get();

    return $books;
});

Route::resource('books', BookController::class);
