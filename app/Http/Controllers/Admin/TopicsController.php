<?php

namespace App\Http\Controllers\Admin;

use App\Models\Topics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Topics::orderBy('id','desc')->paginate(20);
        return view('admin.topics.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topics.create');
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
                'name' => 'required|unique:topics',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataArr = $request->all();
        $dataArr['slug'] = str_slug($dataArr['name']);
        Topics::create($dataArr);
        $request->session()->flash('success', 'Record successfully added!');
        return redirect()->route('admin.topics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Topics::findOrFail($id);
        return view('admin.topics.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Topics::findOrFail($id);
        return view('admin.topics.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Topics::findOrFail($id);
        $validator = Validator::make($request->all(),[
                'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataArr = $request->all();
        $dataArr['slug'] = str_slug($dataArr['name']);
        
        $item->fill($dataArr)->save();
        $request->session()->flash('info', 'Record successfully updated!');
        return redirect()->route('admin.topics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $item = Topics::findOrFail($id);
        $item->delete();
        $request->session()->flash('info', 'Record successfully deleted!');
        return redirect()->route('admin.topics.index');
    }
}
