<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    private $response = [];
    private $statusCode = 200;

    private function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'year' => 'required|numeric',
            'synopsis' => 'required|string',
            'released_at' => 'required|date_format:"Y-m-d"',
            'cost' => 'required|numeric',
            'id_genre' => 'required|string'
        ]);
        return $validator;
    }

    public function index()
    {
        $movies = Movie::orderBy('name', 'asc')->paginate();
        $this->response = $movies;
        return response()->json($this->response, $this->statusCode);
    }

    public function store(Request $request)
    {

        $validator = $this->validation($request);

        if ($validator->fails()) {

            $this->response = $validator->errors();
            $this->statusCode = 400;
        } else {

            $genresExist = Genre::find($request->input('id_genre'));
            $movieExist = Movie::where(['name' => $request->input('name'), 'year' => $request->input('year')])->get();
            if (!$genresExist) {
                $this->response = ['error' => 'Genres not found'];
                $this->statusCode = 404;
            } elseif (isset($movieExist[0]['id'])) {
                $this->response = ['error' => 'Movie already registered'];
                $this->statusCode = 400;
            } else {
                $data['name'] = $request->input('name');
                $data['year'] = $request->input('year');
                $data['synopsis'] = $request->input('synopsis');
                $data['runtime'] = $request->input('runtime');
                $data['released_at'] = $request->input('released_at');
                $data['cost'] = $request->input('cost');
                $data['id_genre'] = $request->input('id_genre');

                $movie = new Movie();

                $movie->name = $data['name'];
                $movie->year = $data['year'];
                $movie->synopsis = $data['synopsis'];
                $movie->runtime = $data['runtime'];
                $movie->released_at = $data['released_at'];
                $movie->cost = $data['cost'];
                $movie->id_genre = $data['id_genre'];
                $movie->save();
                $data['id'] = $movie->id;
                $this->response = ['data' => $data];
                $this->statusCode = 200;
            }
        }

        return response()->json($this->response, $this->statusCode);
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        if ($movie) {
            $this->response = ['data' => $movie];
        } else {
            $this->response = ['error' => 'Movie not found'];
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

            $movie = Movie::find($id);

            if ($movie) {

                $genresExist = Genre::find($request->input('id_genre'));

                if ($genresExist) {
                    $data['name'] = $request->input('name');
                    $data['year'] = $request->input('year');
                    $data['synopsis'] = $request->input('synopsis');
                    $data['runtime'] = $request->input('runtime');
                    $data['released_at'] = $request->input('released_at');
                    $data['cost'] = $request->input('cost');
                    $data['id_genre'] = $request->input('id_genre');

                    $movie->name = $data['name'];
                    $movie->year = $data['year'];
                    $movie->synopsis = $data['synopsis'];
                    $movie->runtime = $data['runtime'];
                    $movie->released_at = $data['released_at'];
                    $movie->cost = $data['cost'];
                    $movie->id_genre = $data['id_genre'];
                    $movie->save();
                    $data['id'] = $movie->id;
                    $this->response = ['data' => $data];
                    $this->statusCode = 200;
                } else {
                    $this->response = ['error' => 'Genres not found'];
                    $this->statusCode = 404;
                }
            } else {
                $this->response = ['error' => 'Movie not found'];
                $this->statusCode = 404;
            }
        }
        return response()->json($this->response, $this->statusCode);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $movie->delete();
        }
        return response()->json($this->response, $this->statusCode);
    }
}
