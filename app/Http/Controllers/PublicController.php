<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{ 
    public $animes = [
    [
        'id' => '1',
        'name' => 'One Piece',
        'year' => '1998',
        'genre' => 'Dramatic',
        'description' => 'lorem',
        'img' => 'https://www.nerdpool.it/wp-content/uploads/2019/06/one-piece-cover-93.png',
    ],
    [
        'id' => '2',
        'name' => 'One punch Man',
        'year' => '1994',
        'genre' => 'Action',
        'description' => 'lorem',
        'img' => 'https://kbimages1-a.akamaihd.net/b99e2755-cbe0-4a9f-a888-d49edb71d440/1200/1200/False/one-punch-man-vol-2.jpg',
    ],
    [
        'id' => '3',
        'name' => 'jujitsu kaisen',
        'year' => '2023',
        'genre' => 'Action',
        'description' => 'lorem',
        'img' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974722846/jujutsu-kaisen-vol-11-9781974722846_hr.jpg',
    ],
    [
        'id' => '4',
        'name' => 'Death Note',
        'year' => '2000',
        'genre' => 'Thriller',
        'description' => 'lorem',
        'img' => 'https://theanimeaccord.files.wordpress.com/2016/10/death-note-dvd-cover-front2.jpg?w=1535',
    ],
    [
        'id' => '5',
        'name' => 'Demon Slayer',
        'year' => '2007',
        'genre' => 'Action',
        'description' => 'lorem',
        'img' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974700523/demon-slayer-kimetsu-no-yaiba-vol-1-9781974700523_hr.jpg',
    ],
    [
        'id' => '6',
        'name' => 'Avengers',
        'year' => '1996',
        'genre' => 'Fantasy',
        'description' => 'lorem',
        'img' => 'https://cdn.marvel.com/content/1x/avengers_forever_14_infinity_saga_variant.jpg',
    ],
];
public $team = [
    [
        'name' => 'Michele',
        'surname' => 'Boaretto',
        'job' => 'CEO',
    ],
    [
        'name' => 'Valerio',
        'surname' => 'Varvaglione',
        'job' => 'CEO',
    ],
    [
        'name' => 'Thomas',
        'surname' => 'Fazziani',
        'job' => 'CEO',
    ],
];


public function homepage () {
    return view('welcome', ['animes' => $this->animes]);
}

//funzione per il team
public function showTeam() {
    return view('chi-siamo', ['team' => $this->team]);
}


// public function show($id) {

//     foreach($this->animes as $anime){
//         if($anime['id'] == $id){
//             return view('servizi', ['anime' => $anime]);
//         }
//     }

// }



}
