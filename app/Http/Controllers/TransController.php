<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use \Session;
use \App\User;
use \App\Transportista;
use DB;
use Image;
use Laracasts\Flash\Flash;

class TransController extends Controller
{

    public function perfil()
    {
        $trans= DB::table('transportistas')
        ->where('transportistas.idusers', Auth::User()->id)
        ->select('transportistas.*')
        ->get();

        //dd($padres);
        return view('Transportista.perfil')->with('transp',$trans); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios= DB::table('municipios')->get();
        
        return view('Transportista/registro')->with('municipios',$municipios);
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
        if($request->hasFile('imagen'))
        {

           /* $hola=$request->all();
            dd($hola); */   

            $usuarios = new User();
            $image= $request->file('imagen');
            $filename= time(). '.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(300,325)->save(public_path('img/perfil/'.$filename));
                
            $usuarios->name=$request->name;
            $usuarios->email=$request->email;
            $usuarios->password=bcrypt($request->password);
            $usuarios->tipo="Transportistas";
            $usuarios->foto=$filename;
            $usuarios->save();

            $trans = new Transportista();
            $trans->nombre=$request->name;
            $trans->apellido=$request->apellidos;
            $trans->direccion=$request->dir;
            $trans->telefono=$request->telefono;
            $trans->idUsers= $usuarios->id;
            $trans->save();
     
            return redirect('/login');
        }
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
