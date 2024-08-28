<?php


use App\Models\MenuItem;

Route::get('/api/restaurant-menu', function () {
    return MenuItem::all();
});
