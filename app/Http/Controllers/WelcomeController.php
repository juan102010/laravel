<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-------------consultar
        //trae todo
        $tickets1=Ticket::all();
        //trae por id
        //$query2=Ticket::find(2);
        //dd($query2);
        return view('tickets',compact('tickets1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //------------crear
        $ticketObject = new Ticket;
        $ticketObject->descripcion = $request->descripcion;
        $ticketObject->fecha_solicitud =$request->fecha;
        $ticketObject->responsable =$request->responsable;
        $ticketObject->save();
        $tickets1=Ticket::all();
        return view('tickets',compact('tickets1'));
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
        $objectToUpdate=Ticket::find($id);
        return view('edit',compact('objectToUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //-------------actualizar
        $objectToUpdate=Ticket::find($request->id_ticket);
        $objectToUpdate->descripcion = $request->descripcion;
        $objectToUpdate->fecha_solicitud =$request->fecha;
        $objectToUpdate->responsable =$request->responsable;
        $objectToUpdate->save();

        $tickets1=Ticket::all();
        return view('tickets',compact('tickets1'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //--------------borrar
        $objectToDelete=Ticket::destroy($id);
        $tickets1=Ticket::all();
        return view('tickets',compact('tickets1'));
    }
}
