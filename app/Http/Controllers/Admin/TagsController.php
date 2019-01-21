<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Tags::orderBy('id','desc')->paginate(20);
        return view('admin.tags.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
                'name' => 'required|unique:tags',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Tags::create($request->all());
        $request->session()->flash('success', 'Record successfully added!');
        return redirect()->route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Tags::findOrFail($id);
        return view('admin.tags.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tags::findOrFail($id);
        return view('admin.tags.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Tags::findOrFail($id);
        $validator = Validator::make($request->all(),[
                'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $item->fill($request->all())->save();
        $request->session()->flash('info', 'Record successfully updated!');
        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $item = Tags::findOrFail($id);
        $item->delete();
        $request->session()->flash('info', 'Record successfully deleted!');
        return redirect()->route('admin.tags.index');
    }
}
