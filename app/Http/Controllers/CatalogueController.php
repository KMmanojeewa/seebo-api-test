<?php

namespace App\Http\Controllers;

use App\Catalogue;
use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Catalogue::all();
        return view ('Catalogues.index')->with('records',$records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return "sssssssss";
        return view('Catalogues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->all()['name']) {
            Catalogue::create($request->all());
            return redirect()->back()->with('message', 'New catalogue created');
        } else {
            return redirect()->back()->with('failed-message', 'Please enter valid name');
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
        $records = Catalogue::find($id);
//        echo '<pre>'.print_r($records->Categories,1);die();
        return view ('Catalogues.show')->with('records',$records);
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
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->update($request->all());
        return $catalogue;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->delete();
        return 204;
    }
}
