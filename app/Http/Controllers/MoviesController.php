<?php

namespace App\Http\Controllers;

use App\Models\Reseña;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculasPopulares = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular?language=es')
        ->json()['results'];

        $generosArray = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?language=es')
        ->json()['genres'];

        $generos = collect($generosArray)->mapWithKeys(function($genero){
            return [$genero['id'] => $genero['name']];
        });


        /* dump($peliculasPopulares); */

        return view('dashboard',[
            'peliculasPopulares' => $peliculasPopulares,
            'generos' => $generos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesPelicula = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images&language=es')
        ->json() ;

        /* dump($detallesPelicula); */

        $reseñas = Reseña::where('pelicula_id',$id)->get();
        



        return view('show',[
            'detallesPelicula' => $detallesPelicula,
            'reseñas' => $reseñas,
           /*  'generos' => $generos, */
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
