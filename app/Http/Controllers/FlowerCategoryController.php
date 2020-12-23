<?php

namespace App\Http\Controllers;

use App\Flower;
use App\FlowerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlowerCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->authorize('admin', FlowerCategory::class);

        return view('category.index', [
            'headercategories' => FlowerCategory::all(),
            'categories' => FlowerCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return abort(404, "No Page");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return abort(404, "No Page");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('category.show', [
            'headercategories' => FlowerCategory::all(),
            'category' => FlowerCategory::find($id),
            'flowers' => Flower::where('category_id', $id)->paginate(8),
        ]);
    }

    public function filter(Request $request, $id) {
        $flowers = Flower::where('category_id', $id)
            ->where($request->filterType, 'like', '%' . $request->queryText . '%')
            ->paginate(8);

        return view('category.show', [
            'headercategories' => FlowerCategory::all(),
            'category' => FlowerCategory::find($id),
            'flowers' => $flowers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $this->authorize('admin', FlowerCategory::class);

        return view('category.edit', [
            'headercategories' => FlowerCategory::all(),
            'category' => FlowerCategory::find($id),
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
        $this->authorize('admin', FlowerCategory::class);

        $this->validate($request, [
            'name' => [ 'required', 'unique:flower_categories,name', 'min:5' ],
        ]);

        $category = FlowerCategory::find($id);
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();

            Storage::putFileAs('public/images/', $image, $filename);
            $category->image = 'public/images/'. $filename;
        }

        $category->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->authorize('admin', FlowerCategory::class);

        FlowerCategory::find($id)->flowers()->delete();
        FlowerCategory::destroy($id);
        return redirect()->back();
    }
}
