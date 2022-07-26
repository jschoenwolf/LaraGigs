<?php

namespace App\Models;

class Listing
{

    public static function all()
    {
        return [
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
        ];
    }
    public static function find($id)
    {
    }
}
