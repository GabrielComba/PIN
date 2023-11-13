<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\models\Persona;
use Illuminate\Http\Request;
use\illuminate\Support\Facades\Mail;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|unique:personas,email',
        ]);

        $persona = Persona::create([
            'name' => $request['name'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
        ]);

        //CREAMOS LA VARIABLE PARA ENVIAR MAIL (que quiero que envie la Variable que cree $details en SendPost.php)

        $details = [
            'mensaje' => "El Usuario " . $request['name'] . "se a registrado",
            'name' => $request['name'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
        ];

        Mail::to('satelitaltrack.oficial@gmail.com')->send(new SendPost($details));

        return response()->json([
            'mensaje' => 'Se Agrego Correctamente la persona',
            'data' => $persona,
        ]);
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
