<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;

class TrainerControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers =Trainer::all();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){//valida si contiene o no un archivo
            $file=$request->file('avatar');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $trainer = new Trainer();
        $trainer->name=$request->input('name');
        $trainer->avatar=$name;
        $trainer->description=$request->input('description');
        $trainer->slug=$request->input('slug');
        $trainer->save();
        // return $request->input('name');
        // return $request->all();
        return redirect('trainers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)//implicit binding->hace referencia a las variables de un modelo y toma el id por defecto
    {
        // $trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        // $trainer = Trainer::find($id);
        return view('trainers.show',compact('trainer'));
        // return view('trainers.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){//valida si contiene o no un archivo
            $file=$request->file('avatar');
            $name = time().'_'.$file->getClientOriginalName();
            $trainer->avatar=$name;
            $file->move(public_path().'/images/',$name);
        }
        $trainer->save();
        return redirect('trainers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer=Trainer::find($id);
        $trainer->delete();

        return redirect('trainers');
    
    }
}
