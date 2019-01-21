<?php

namespace App\Http\Controllers\Admin;

use App\Models\Articles;
use App\Models\Topics;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Articles::orderBy('id','desc')->paginate(20);
        return view('admin.articles.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $topics = Topics::where('status',1)->get();
        $tags = Tags::where('status',1)->get();
        
        return view('admin.articles.create',[
            'topics'=>$topics,
            'tags'=>$tags
        ]);
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
                'title' => 'required|unique:articles',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataArr = $request->all();

        $dataArr['slug'] = str_slug($dataArr['title']);

        if(isset($dataArr['tags'])){
            $tagsString  = implode(',', $dataArr['tags']);
            $dataArr['tags'] =  $tagsString;
        }

        Articles::create($dataArr);
        $request->session()->flash('success', 'Record successfully added!');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Articles::findOrFail($id);
        return view('admin.articles.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Articles::findOrFail($id);
        $savedTags = explode(',', $item->tags);
        $tags = Tags::where('status',1)->get();
        $topics = Topics::where('status',1)->get();
        return view('admin.articles.edit',[
            'tags'=>$tags,
            'savedTags'=>$savedTags,
            'topics'=>$topics,
        ])->with('item', $item);
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
        $item = Articles::findOrFail($id);
        $validator = Validator::make($request->all(),[
                'title' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataArr = $request->all();

        $dataArr['slug'] = str_slug($dataArr['title']);

        if(isset($dataArr['tags'])){
            $tagsString  = implode(',', $dataArr['tags']);
            $dataArr['tags'] =  $tagsString;
        }

        $item->fill($dataArr)->save();
        $request->session()->flash('info', 'Record successfully updated!');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $item = Articles::findOrFail($id);
        $item->delete();
        $request->session()->flash('info', 'Record successfully deleted!');
        return redirect()->route('admin.articles.index');
    }


    public function ajaxUploadImageDescription(Request $request){
        try{
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $request->file('file')->move("public/uploads/articles/", $fileName);

                echo json_encode(array('location' =>url('/')."/public/uploads/articles/".$fileName));
            
            }
            else{
                echo "There is error";
            }
        }catch(\Throwable | \Error | \Exception $e){
            echo $e->getMessage();
        }
    }
}
