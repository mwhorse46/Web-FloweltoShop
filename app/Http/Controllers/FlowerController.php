<?php

namespace App\Http\Controllers;

use App\Flower;
use App\FlowerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return abort(404, "No Page");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $this->authorize('is_admin', Flower::class);

        return view('flower.create', [
            'categories' => FlowerCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => [ 'required', 'unique:flowers,name', 'min:5' ],
            'price' => [ 'required', 'integer', 'min:50000' ],
            'description' => [ 'required', 'min:20' ],
            'image' => [ 'required' ],

            'category_id' => [ 'required' ],
        ]);

        return 'FlowerController@store: Want to create ' . $request->name;

        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->description = $request->description;

        if ($request->hasFile('image')) { // must be true
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();

            Storage::putFileAs('public/images/', $image, $filename);
            $flower->image = 'public/images/'. $filename;
        }

        $flower->category_id = $request->category_id;
        $flower->save();

        return redirect()->route('flower.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('flower.show', [
            'flower' => Flower::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $this->authorize('is_admin', Flower::class);

        return view('flower.edit', [
            'categories' => FlowerCategory::all(),
            'flower' => Flower::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->authorize('is_admin', Flower::class);

        $this->validate($request, [
            'name' => [ 'required', 'unique:flowers,name', 'min:5' ],
            'price' => [ 'required', 'integer', 'min:50000' ],
            'description' => [ 'required', 'min:20' ],

            'category_id' => [ 'required' ],
        ]);

        return 'FlowerController@update: Want to update ' . $id;

        $flower = Flower::find($id);
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();

            Storage::putFileAs('public/images/', $image, $filename);
            $flower->image = 'public/images/'. $filename;
        }

        $flower->category_id = $request->category_id;
        $flower->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->authorize('is_admin', Flower::class);

        return 'FlowerController@destroy: Want to delete ' . $id;

        Flower::destroy($id);
        return redirect()->back();
    }
}
