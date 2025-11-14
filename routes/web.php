<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $card = [
        [
            'header' => 'Welcome to Our Website',
            'content' => 'Card Content 1',
            'footer' => 'This is the footer of card 1.'
        ],
        [
            'header' => 'About Us',
            'content' => 'Card Content 2',
            'footer' => 'This is the footer of card 2.'
        ],
        [
            'header' => 'Contact Us',
            'content' => 'Card Content 3',
            'footer' => 'This is the footer of card 3.'
        ]
    ];
    $dataTable = [
        'items' => [
            ['1', 'Alice', 'alice@example.com'],
            ['2', 'Bob', 'bob@example.com'],
            ['3', 'Charlie', 'charlie@example.com'],
        ]
    ];
    return view('welcome', compact('card', 'dataTable'));
});
Route::get('/about', function () {
    return view('about');
});
