<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function getMovies() {
        echo json_encode(Movies::all());
    }
    
    public function addMovie(Request $request) {
        $insertedData = Movies::create(
            [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'trailer_url' => $request->input('trailer_url'),
                'poster_url' => $request->input('poster_url'),
            ]
        );
        echo json_encode(
            [
                'status_code' => 200,
                'inserted_data' => $insertedData
            ]
        );
    }

   
    public function deleteMovie(Request $request) {
        $status = Movies::find($request->input('movie_id'))->delete();
        if($status) {
            echo json_encode([
                'status_code' => 200
            ]);
        }
    }

    
    public function updateMovie(Request $request) {
        $status = Movies::find($request->input('movie_id'))->update($request->input());
        echo json_encode(
            [
                'status_code' => 200
            ]
        );
    }
}
