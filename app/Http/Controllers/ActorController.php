<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\StarringInMovie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Validator;

class ActorController extends Controller
{
    // use HasFetchAllRenderCapabilities;
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return ResourceCollection
     */
    private $response = [];
    private $statusCode = 200;

    private function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'bio' => 'required|string',
            'born_at' => 'required|date_format:"Y-m-d"',
        ]);
        return $validator;
    }

    public function index()
    {
        $actors = Actor::orderBy('name', 'asc')->paginate();
        $this->response = $actors;
        return response()->json($this->response, $this->statusCode);
    }

    public function store(Request $request)
    {

        $validator = $this->validation($request);

        if ($validator->fails()) {

            $this->response = $validator->errors();
            $this->statusCode = 400;
        } else {

            $actorExist = Actor::where(['name' => $request->input('name')])->get();
            if (!isset($actorExist[0]['id'])) {
                $data['name'] = $request->input('name');
                $data['bio'] = $request->input('bio');
                $data['born_at'] = $request->input('born_at');

                $actor = new Actor();

                $actor->name = $data['name'];
                $actor->bio = $data['bio'];
                $actor->born_at = $data['born_at'];
                $actor->save();
                $data['id'] = $actor->id;
                $this->response = ['data' => $data];
            } else {
                $this->response = ['error' => 'Actor already registered'];
                $this->statusCode = 400;
            }
        }

        return response()->json($this->response, $this->statusCode);
    }

    public function show($id)
    {
        $actor = Actor::find($id);
        if ($actor) {
            $this->response = ['data' => $actor];
        } else {
            $this->response = ['error' => 'Actor not found'];
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

            $actor = Actor::find($id);

            if ($actor) {
                $data['name'] = $request->input('name');
                $data['bio'] = $request->input('bio');
                $data['born_at'] = $request->input('born_at');

                $actor->name = $data['name'];
                $actor->bio = $data['bio'];
                $actor->born_at = $data['born_at'];
                $actor->save();
                $data['id'] = $actor->id;
                $this->response = ['data' => $data];
                $this->statusCode = 200;
            } else {
                $this->response = ['error' => 'Actor not found'];
                $this->statusCode = 404;
            }
        }
        return response()->json($this->response, $this->statusCode);
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);

        if ($actor) {
            $actor->delete();
        }
        return response()->json($this->response, $this->statusCode);
    }

    public function appearences($id)
    {
        $actor = Actor::where('id', $id)->select('name')->get();
        if (isset($actor[0])) {
            $starring = new ResourceCollection(StarringInMovie::where('id_actor', $id)->with('movie')->select('character', 'id_movie')->get());
            $data = [
                'actor' => $actor,
                'starring' => $starring->groupby('movie.name')
            ];
            $this->response = ['data' => $data];
        } else {
            $this->response = ['error' => 'Actor not found'];
            $this->statusCode = 404;
        }

        return response()->json($this->response, $this->statusCode);
    }

    public function favorite($id)
    {
        $actor = Actor::where('id', $id)->select('name')->get();
        if (isset($actor[0]['name'])) {
            $genres = new ResourceCollection(StarringInMovie::where('id_actor', $id)->get());
            $idGenresFavorite = $genres->countBy('id_genre')->sort()->keys()->last();
            $genre = Genre::find($idGenresFavorite);
            $data = [
                'actor' => [
                    'id' => $id,
                    'name' => $actor[0]['name']
                ],
                'favorite_genre' => [
                    'id' => $idGenresFavorite,
                    'name' => $genre['name']
                ]
            ];
            $this->response = ['data' => $data];
        } else {
            $this->response = ['error' => 'Actor not found'];
            $this->statusCode = 404;
        }

        return response()->json($this->response, $this->statusCode);
    }

    public function genres($id)
    {
        $actor = Actor::where('id', $id)->select('name')->get();
        if (isset($actor[0]['name'])) {
            $movies = new ResourceCollection(StarringInMovie::where('id_actor', $id)->with('movie')->with('genre')->select('id', 'id_movie', 'id_genre')->get());
            $data = [
                'actor' => [
                    'id' => $id,
                    'name' => $actor[0]['name']
                ],
                'movies_by_genre' => $movies->unique('id_movie')->countBy('genre.name')
            ];

            $this->response = ['data' => $data];
        } else {
            $this->response = ['error' => 'Actor not found'];
            $this->statusCode = 404;
        }
        return response()->json($this->response, $this->statusCode);
    }

    public function ingenres($id)
    {
        $genre = Genre::where('id', $id)->select('name')->get();
        if (isset($genre[0]['name'])) {
            $actors = new ResourceCollection(StarringInMovie::where('id_genre', $id)->with('actor')->select('id', 'id_actor')->get());
            $data = [
                'genre' => [
                    'id' => $id,
                    'name' => $genre[0]['name']
                ],
                'starring_by_genre' => $actors->countBy('actor.name')->sortDesc()
            ];

            $this->response = ['data' => $data];
        } else {
            $this->response = ['error' => 'Genre not found'];
            $this->statusCode = 404;
        }
        return response()->json($this->response, $this->statusCode);
    }
}
