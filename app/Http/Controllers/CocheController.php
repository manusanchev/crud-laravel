<?php

namespace App\Http\Controllers;

use App\Coche;
use App\Http\Requests\ValidacionCoche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $coches = Coche::all();
       return view("index",compact("coches"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCoche $request)
    {


        $datos = $request->all();
        if($archivo= $request->file("foto")){
            $nombre = $archivo->getClientOriginalName();
            $archivo->move("images",$nombre);
            $datos['foto'] = $nombre;
        }
        Coche::create($datos);
      /*  $coche = new Coche();
        $coche->nombre= $request->nombre;
        $coche->matricula= $request->matricula;
        $coche->color= $request->color;
        $coche->año_fabricacion= $request->año_fabricacion;
        $coche->save();
       
    
        */
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::findOrFail($id);
        return view("edit",compact("coche"));
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
        $coche = Coche::findOrFail($id);
        $coche->nombre= $request->nombre;
        $coche->matricula= $request->matricula;
        $coche->color= $request->color;
        $coche->año_fabricacion= $request->año_fabricacion;
   
        if($archivo= $request->file("foto")){
            $nombre = $archivo->getClientOriginalName();
            $archivo->move("images",$nombre);
            $coche->foto = $nombre;
        }
     
        $coche->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coche::findOrFail($id)->delete();
        return redirect("/");

    }
}
