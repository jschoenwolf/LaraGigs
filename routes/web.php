<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [

            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Now you know, but if the symbols confuse you, don’t feel too bad about it. I’ve been using Macs since I was a little kid and the Option and Control key symbols have always perplexed me to the point where I’ll forget which each is, and that is precisely why Apple is gradually moving to the labeled keys rather than symbol keys. Simple is better'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Now you know, but if the symbols confuse you, don’t feel too bad about it. I’ve been using Macs since I was a little kid and the Option and Control key symbols have always perplexed me to the point where I’ll forget which each is, and that is precisely why Apple is gradually moving to the labeled keys rather than symbol keys. Simple is better'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'Now you know, but if the symbols confuse you, don’t feel too bad about it. I’ve been using Macs since I was a little kid and the Option and Control key symbols have always perplexed me to the point where I’ll forget which each is, and that is precisely why Apple is gradually moving to the labeled keys rather than symbol keys. Simple is better'
            ]
        ]
    ]);
});
