<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
#you must tell the controler to use the Model
use App\Asset;
use Session;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // create a variable  and store all the blog posts in it from the database
      #$assets = Asset::all(); //all() gets all the data in the database
      $assets = Asset::orderBy('id', 'desc')->paginate(5);
      //return a view and pass in the above variable
      return view('assets.index')->withAssets($assets);
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

        //add the namespace of Session
        Session::flash('success', 'The asset was successfully created!');

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
      //find() special helper method from elequent
      //passing the object from the model gives you access to every data inside it
      $asset = Asset::find($id);
      return view('assets.show')->withAsset($asset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // find the item in the database and save as a variable
      $asset = Asset::find($id);
      // return the view and pass with the variable we created
      return view('assets.edit')->withAsset($asset);
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
      // validate the data
      $this->validate($request, array(
            'brand' => 'required|max:255',
            'name' => 'required|max:255',
            'model' => 'required|max:255',
            'resolution' => 'required|max:255',
            'processor' => 'required|max:255',
            'ram' => 'required|max:255'
        ));
      // save the data to the database
      // find the exisiting and update it
      $asset = Asset::find($id);
      #input - identifies the data from the request
      $asset->brand = $request->input('brand');
      $asset->name = $request->input('name');
      $asset->model = $request->input('model');
      $asset->resolution = $request->input('resolution');
      $asset->processor = $request->input('processor');
      $asset->ram = $request->input('ram');

      #this automatically update the updated_at
      $asset->save();
      // set flash data with success message
      Session::flash('success', 'This asset was successfully saved.');
      // redirect with flash data to posts.show
      return redirect()->route('assets.show', $asset->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //make var of model Post then find the item
        $asset = Asset::find($id);
        //delete the item
        $asset->delete();
        //flash data with success message
        Session::flash('success', 'The asset was successfully deleted');
        //redirect with flash data to index cause show wont exist anymore
        return redirect()->route('assets.index');
    }
}
