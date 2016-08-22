<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
#you must tell the controler to use the Model
use App\Asset;

class AssetController extends Controller
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
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        // more in the documentation
        $this->validate($request, array(
              'brand' => 'required|max:255',
              'name' => 'required|max:255',
              'model' => 'required|max:255',
              'resolution' => 'required|max:255',
              'processor' => 'required|max:255',
              'ram' => 'required|max:255'
          ));

        // store in the database
        #create a new instance of the model
        $asset = new Asset;
        #now we can add things
        $asset->brand = $request->brand;
        $asset->name = $request->name;
        $asset->model = $request->model;
        $asset->resolution = $request->resolution;
        $asset->processor = $request->processor;
        $asset->ram = $request->ram;
        #save the object using the save() method
        $asset->save();
        //redirect to another page
        #pass the ID from the object
        return redirect()->route('assets.show', $asset->id);
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
