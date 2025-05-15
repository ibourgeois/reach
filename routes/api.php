<?php

use Illuminate\Support\Facades\Route;

use iBourgeois\Reach\Http\Controllers\ContactController;
use iBourgeois\Reach\Http\Controllers\ListController;

Route::get('/lists', [ListController::class, 'index'])->name('reach.lists.index');

Route::get('/contacts', [ContactController::class, 'index'])->name('reach.contacts.index');
