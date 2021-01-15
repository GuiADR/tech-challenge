<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\StarringInMovie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class StarringInMovieController extends Controller
{
    private $response = [];
    private $statusCode = 200;

    private function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'id_actor' => 'required|string',
            'character' => 'required|string',
            'id_movie' => 'required|string',
            'id_genre' => 'required|string',
        ]);
        return $validator;
    }

    public function index()
    {

        $starringInMovies = StarringInMovie::paginate();
        $this->response = $starringInMovies;
        return response()->json($this->response, $this->statusCode);
    }

    public function store(Request $request)
    {

        $validator = $this->validation($request);

        if ($validator->fails()) {

            $this->response = $validator->errors();
            $this->statusCode = 400;
        } else {
            $actorExist = Actor::find($request->input('id_actor'));
            $movieExist = Movie::find($request->input('id_movie'));
            $genreExist = Genre::find($request->input('id_genre'));
            if ($actorExist && $movieExist && $genreExist) {
                $data['id_actor'] = $request->input('id_actor');
                $data['character'] = $request->input('character');
                $data['id_movie'] = $request->input('id_movie');

                $starringInMovie = new StarringInMovie();

                $starringInMovie->id_actor = $data['id_actor'];
                $starringInMovie->character = $data['character'];
                $starringInMovie->id_movie = $data['id_movie'];
                $starringInMovie->save();
                $data['id'] = $starringInMovie->id;
                $this->response = ['data' => $data];
                $this->statusCode = 200;
            } else {
                $error = [];
                if (!$actorExist) $error['actor'] = 'Actor not found';
                if (!$movieExist) $error['movie'] = 'Movie not found';
                if (!$genreExist) $error['genre'] = 'Genre not found';
                $this->response = ['error' => $error];
                $this->statusCode = 404;
            }
        }

        return response()->json($this->response, $this->statusCode);
    }

    public function show($id)
    {
        $starringInMovie = StarringInMovie::find($id);
        if ($starringInMovie) {
            $this->response = ['data' => $starringInMovie];
        } else {
            $this->response = ['error' => 'Starring not found'];
            $this->statusCode = 404;
        }
        return response()->json($this->response, $this->statusCode);
    }
    public function update(Request $request, $id)
    {
        $validator = $this->validation($request);

        if ($validator->fails()) {
            $this->response = $validator->errors();
            $this->statusCode = 400;
        } else {

            $starringInMovie = StarringInMovie::find($id);
            $actorExist = Actor::find($request->input('id_actor'));
            $movieExist = Movie::find($request->input('id_movie'));
            $genreExist = Genre::find($request->input('id_genre'));

            if ($starringInMovie && $actorExist && $movieExist && $genreExist) {
                $data['id_actor'] = $request->input('id_actor');
                $data['character'] = $request->input('character');
                $data['id_movie'] = $request->input('id_movie');


                $starringInMovie->id_actor = $data['id_actor'];
                $starringInMovie->character = $data['character'];
                $starringInMovie->id_movie = $data['id_movie'];
                $starringInMovie->save();
                $data['id'] = $starringInMovie->id;
                $this->response = ['data' => $data];
                $this->statusCode = 200;
            } else {
                $error = [];
                if (!$actorExist) $error['actor'] = 'Actor not found';
                if (!$movieExist) $error['movie'] = 'Movie not found';
                if (!$genreExist) $error['genre'] = 'Genre not found';
                if (!$starringInMovie) $error['starring'] = 'Starring not found';
                $this->response = ['error' => $error];
                $this->statusCode = 404;
            }
        }
        return response()->json($this->response, $this->statusCode);
    }

    public function destroy($id)
    {
        $starringInMovie = StarringInMovie::find($id);

        if ($starringInMovie) {
            $starringInMovie->delete();
        }
        return response()->json($this->response, $this->statusCode);
    }
}
