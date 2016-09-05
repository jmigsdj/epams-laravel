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

    public function __construct() {
        $this->middleware('auth');
    }
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
          'tracker' => 'max:255',     #RGN..
          'barcode' => 'max:255',
          #'accountability' => 'max:255',
          'name' => 'max:255',
          'brand' => 'max:255',
          #'user_id' => 'max:255', #name of the user
          #'borrowTime' => 'max:255',#time
          #'returnTime' => 'max:255',#time
          'status' => 'max:255',
          'condition' => 'max:255',
          'model' => 'max:255',
          'resolution' => 'max:255',
          'processor' => 'max:255',
          'ram' => 'max:255',
          'os' => 'max:255',
          'chipset' => 'max:255',
          'gpu' => 'max:255',
          'bit' => 'max:255',# x32/x64
          'screenSize' => 'max:255',
          'graphics' => 'max:255', #hardware
          'internalStorage' => 'max:255',
          'simSupport' => 'max:255',
          'arrivalDate' => 'max:255',
          'arrivalNotes' => 'max:255',
          'mac' => 'max:255',
          'serial' => 'max:255',
          'assetType' => 'max:255',
          'subAsset' => 'max:255',
          'imei' => 'max:255',
          'storageAllocation' => 'max:255',
          'category' => 'max:255'
          ));

        // store in the database
        #create a new instance of the model
        $asset = new Asset;
        #now we can add things
        $asset->tracker = $request->tracker;
        $asset->barcode = $request->barcode;
        $asset->name = $request->name;
        $asset->brand = $request->brand;
        $asset->status = $request->status;
        $asset->condition = $request->condition;
        $asset->model = $request->model;
        $asset->resolution = $request->resolution;
        $asset->processor = $request->processor;
        $asset->ram = $request->ram;
        $asset->os = $request->os;
        $asset->chipset = $request->chipset;
        $asset->gpu = $request->gpu;
        $asset->bit = $request->bit;
        $asset->screenSize = $request->screenSize;
        $asset->graphics = $request->graphics;
        $asset->internalStorage = $request->internalStorage;
        $asset->simSupport = $request->simSupport;
        $asset->arrivalDate = $request->arrivalDate;
        $asset->arrivalNotes = $request->arrivalNotes;
        $asset->mac = $request->mac;
        $asset->serial = $request->serial;
        $asset->assetType = $request->assetType;
        $asset->subAsset = $request->subAsset;
        $asset->imei = $request->imei;
        $asset->storageAllocation = $request->storageAllocation;
        $asset->category = $request->category;

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
        'tracker' => 'max:255',     #RGN..
        'barcode' => 'max:255',
        #'accountability' => 'max:255',
        'name' => 'max:255',
        'brand' => 'max:255',
        #'user_id' => 'max:255', #name of the user
        #'borrowTime' => 'max:255',#time
        #'returnTime' => 'max:255',#time
        'status' => 'max:255',
        'condition' => 'max:255',
        'model' => 'max:255',
        'resolution' => 'max:255',
        'processor' => 'max:255',
        'ram' => 'max:255',
        'os' => 'max:255',
        'chipset' => 'max:255',
        'gpu' => 'max:255',
        'bit' => 'max:255',# x32/x64
        'screenSize' => 'max:255',
        'graphics' => 'max:255', #hardware
        'internalStorage' => 'max:255',
        'simSupport' => 'max:255',
        'arrivalDate' => 'max:255',
        'arrivalNotes' => 'max:255',
        'mac' => 'max:255',
        'serial' => 'max:255',
        'assetType' => 'max:255',
        'subAsset' => 'max:255',
        'imei' => 'max:255',
        'storageAllocation' => 'max:255',
        'category' => 'max:255'
        ));
      // save the data to the database
      // find the exisiting and update it
      $asset = Asset::find($id);
      #input - identifies the data from the request
      $asset->tracker = $request->input('tracker');
      $asset->barcode = $request->input('barcode');
      $asset->name = $request->input('name');
      $asset->brand = $request->input('brand');
      $asset->status = $request->input('status');
      $asset->condition = $request->input('condition');
      $asset->model = $request->input('model');
      $asset->resolution = $request->input('resolution');
      $asset->processor = $request->input('processor');
      $asset->ram = $request->input('ram');
      $asset->os = $request->input('os');
      $asset->chipset = $request->input('chipset');
      $asset->gpu = $request->input('gpu');
      $asset->bit = $request->input('bit');
      $asset->screenSize = $request->input('screenSize');
      $asset->graphics = $request->input('graphics');
      $asset->internalStorage = $request->input('internalStorage');
      $asset->simSupport = $request->input('simSupport');
      $asset->arrivalDate = $request->input('arrivalDate');
      $asset->arrivalNotes = $request->input('arrivalNotes');
      $asset->mac = $request->input('mac');
      $asset->serial = $request->input('serial');
      $asset->assetType = $request->input('assetType');
      $asset->subAsset = $request->input('subAsset');
      $asset->imei = $request->input('imei');
      $asset->storageAllocation = $request->input('storageAllocation');
      $asset->category = $request->input('category');


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
