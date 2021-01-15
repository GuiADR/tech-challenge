<?php

use Illuminate\Database\Seeder;
use App\Models\StarringInMovie;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\Genre;

class StarringSeeder extends Seeder
{
    private $starrings = [

        [
            'actor' => 'Morgan Freeman',
            'character' => 'Deus',
            'movie' => 'Bruce Almighty',
            'year_movie' => '2003',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Jim Carrey',
            'character' => 'Bruce Nolan',
            'movie' => 'Bruce Almighty',
            'year_movie' => '2003',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Robert Downey Jr.',
            'character' => 'Tony Stark / Homem de Ferro',
            'movie' => 'Avengers: Endgame',
            'year_movie' => '2019',
            'genre' => 'action',
        ],
        [
            'actor' => 'Tom Holland',
            'character' => 'Peter Parker / Homem-Aranha',
            'movie' => 'Avengers: Infinity War',
            'year_movie' => '2018',
            'genre' => 'action',
        ],
        [
            'actor' => 'Robert Downey Jr.',
            'character' => 'Tony Stark / Homem de Ferro',
            'movie' => 'Avengers: Infinity War',
            'year_movie' => '2018',
            'genre' => 'action',
        ],
        [
            'actor' => 'Paul A. Partain',
            'character' => 'Franklin Hardesty',
            'movie' => 'The Texas Chain Saw Massacre',
            'year_movie' => '1974',
            'genre' => 'horror',
        ],
        [
            'actor' => 'Marilyn Burns',
            'character' => 'Sally Hardesty',
            'movie' => 'The Texas Chain Saw Massacre',
            'year_movie' => '1974',
            'genre' => 'horror',
        ],
        [
            'actor' => 'Linda Blair',
            'character' => 'Regan MacNeil',
            'movie' => 'The Exorcist',
            'year_movie' => '1973',
            'genre' => 'horror',
        ],
        [
            'actor' => 'Ellen Burstyn',
            'character' => 'Chris MacNeil',
            'movie' => 'The Exorcist',
            'year_movie' => '1973',
            'genre' => 'horror',
        ],
        [
            'actor' => 'Tom Hanks',
            'character' => 'Paul Edgecomb',
            'movie' => 'The Green Mile',
            'year_movie' => '1999',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Nicoletta Braschi',
            'character' => 'Dora Orefice',
            'movie' => 'La vita è bella',
            'year_movie' => '1997',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Roberto Benigni',
            'character' => 'Guido Orefice',
            'movie' => 'La vita è bella',
            'year_movie' => '1997',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Tom Hanks',
            'character' => 'Forrest Gump',
            'movie' => 'Forrest Gump',
            'year_movie' => '1994',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Morgan Freeman',
            'character' => 'Ellis Boyd "Red" Redding',
            'movie' => 'The Shawshank Redemption',
            'year_movie' => '1994',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Tim Robbins',
            'character' => 'Andy Dufresne',
            'movie' => 'The Shawshank Redemption',
            'year_movie' => '1994',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Marlon Brando',
            'character' => 'Don Vito Corleone',
            'movie' => 'The Godfather',
            'year_movie' => '1972',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Al Pacino',
            'character' => 'Michael Corleone',
            'movie' => 'The Godfather',
            'year_movie' => '1972',
            'genre' => 'drama',
        ],
        [
            'actor' => 'Tom Holland',
            'character' => 'Peter Parker / Homem-Aranha',
            'movie' => 'Spider-Man: Homecoming',
            'year_movie' => '2017',
            'genre' => 'action',
        ],
        [
            'actor' => 'Robert Downey Jr.',
            'character' => 'Tony Stark / Homem de Ferro',
            'movie' => 'Spider-Man: Homecoming',
            'year_movie' => '2017',
            'genre' => 'action',
        ],
        [
            'actor' => 'Robert Downey Jr.',
            'character' => 'Sherlock Holmes',
            'movie' => 'Sherlock Holmes',
            'year_movie' => '2009',
            'genre' => 'action',
        ],
        [
            'actor' => 'Al Pacino',
            'character' => 'como ele mesmo',
            'movie' => 'Jack and Jill',
            'year_movie' => '2011',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Adam Sandler',
            'character' => 'Jack Sadelstein',
            'movie' => 'Jack and Jill',
            'year_movie' => '2011',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Adam Sandler',
            'character' => 'Jill Sadelstein',
            'movie' => 'Jack and Jill',
            'year_movie' => '2011',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Jim Carrey',
            'character' => 'Hank Evans',
            'movie' => 'Me, Myself & Irene',
            'year_movie' => '2000',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Jim Carrey',
            'character' => 'Charlie Baileygates',
            'movie' => 'Me, Myself & Irene',
            'year_movie' => '2000',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Rasputia Latimore',
            'movie' => 'Norbit',
            'year_movie' => '2007',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Sr. Hangten Wong',
            'movie' => 'Norbit',
            'year_movie' => '2007',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Norbit Albert Rice',
            'movie' => 'Norbit',
            'year_movie' => '2007',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Jada Pinkett Smith',
            'character' => 'Carla Purty',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Cletus Marcellus "Papa" Klump',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Anna Pearl "Mama" Jensen Klump',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Ida Mae "Vovó" Jensen',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Ernie Klump',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Lance Perkins',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],
        [
            'actor' => 'Eddie Murphy',
            'character' => 'Professor Sherman Klump',
            'movie' => 'The Nutty Professor',
            'year_movie' => '1996',
            'genre' => 'comedy',
        ],


    ];

    public function run()
    {
        foreach ($this->starrings as $data) {
            $starring = new StarringInMovie();

            $starring->id_actor = Actor::where('name', $data['actor'])->select('id')->get()[0]['id'];
            $starring->character = $data['character'];
            $starring->id_movie = Movie::where(['name' => $data['movie'], 'year' => $data['year_movie']])->select('id')->get()[0]['id'];
            $starring->id_genre = Genre::where('name', $data['genre'])->select('id')->get()[0]['id'];
            $starring->save();
        }
    }
}
