<?php

namespace Fototeca\Http\Controllers\Foto;

use Illuminate\Http\Request;
use Fototeca\Models\Foto\Foto as Foto;
use Fototeca\Models\Album\Album as Album;
use Fototeca\Http\Requests;
use Fototeca\Http\Requests\Foto\MostrarFotoRequest;
use Fototeca\Http\Requests\Foto\CrearFotoRequest;
use Fototeca\Http\Controllers\Controller;
class FotoController extends Controller
{

     
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MostrarFotoRequest $request)
    {
        $album=$request->get('idAlbum');
        $fotos = Album::find($album)->fotos;
        return view('foto/index',['fotos'=> $fotos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foto/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->hasFile('foto'))
            echo "SI IMAGEN";
        else echo "NO IMAGEN";

        $nombre= $request['name'];
        $ruta='/images/';
        $imagen=$request->file('foto');

        $imagen->move(getcwd().$ruta,$imagen->getClientOriginalName());

         Foto::create([
            'name' =>$imagen->getClientOriginalName(),
            'ruta'=>getcwd().$ruta,$imagen->getClientOriginalName(),
            'album_id'=>'4',
            ]);

         return redirect("/foto?idAlbum=4");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
