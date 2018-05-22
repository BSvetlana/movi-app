<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use App\Http\Requests\MovieRequest;
use Symfony\Component\HttpFoundation\JsonResponse;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Movie[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $title = request()->input('title');

        return Movie::search($title);
    }

    /**
     * Store a newly created resource in storage.
     *
     *  @param  MovieRequest $request
     * @return Movie
     */
    public function store(MovieRequest $request)
    {
        $movie = new Movie();

        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->imageUrl = $request->input('imageUrl');
        $movie->duration = $request->input('duration');
        $movie->releaseDate = $request->input('releaseDate');
        $movie->genre = $request->input('genre');

        $movie->save();

        return $movie;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Movie
     */
    public function show($id)
    {
        return Movie::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MovieRequest $request
     * @param  int  $id
     * @return Movie
     */
    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::find($id);

        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->imageUrl = $request->input('imageUrl');
        $movie->duration = $request->input('duration');
        $movie->releaseDate = $request->input('releaseDate');
        $movie->genre = $request->input('genre');

        $movie->save();

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return new JsonResponse(true);
    }
}
