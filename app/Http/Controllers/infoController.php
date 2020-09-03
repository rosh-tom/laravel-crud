<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;


class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        // $title = 'Hello World'; 'infos' => information::all() 
        $data = array(
            'title' => 'Hello',
            'infos' => information::orderBy('id', 'desc')->paginate(5)
        );  
        return view('pages.information.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title' => 'Add'
        );
        return view('pages.information.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $this->validate($request, [
        //      'firstname'=>'required',
        //      'lastname'=>'required'
        //  ]);
        $info = new information;
        $info->firstname = $request->input('firstname');
        $info->lastname = $request->input('lastname');
        $info->bday = $request->input('bday');
        $info->gender = $request->input('gender');
        $info->course = $request->input('course');
        $info->email = $request->input('email');
        $info->save();

        return redirect('/information')->with('success', 'Post Created');

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
        $data = array(
            'title' => 'Edit Information',
            'info' => information::find($id)
        ); 
        return view('pages.information.edit')->with($data);
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
