<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Topics;
use App\Models\Tags;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlesCount =  Articles::count();
        $topicsCount =  Topics::count();
        $tagsCount =  Tags::count();

        return view('admin.dashboard',[
        	'articlesCount'=>$articlesCount,
        	'topicsCount'=>$topicsCount,
        	'tagsCount'=>$tagsCount,
        ]);
    }
}
