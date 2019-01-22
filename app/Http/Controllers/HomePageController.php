<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Http\Resources\Article as ArticleResource;

class HomePageController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::where('status',1)->orderby('created_at','desc')->limit(5)->get();
        foreach($articles as $key=>$article){
        	if($key==0){
        		$data['leftSideArticle'] = new ArticleResource($article);
        	}elseif($key==4){
        		$data['rightSideArticle'][] = new ArticleResource($article);
        	}else{
        		$data['centerSideArticle'] = new ArticleResource($article);
        	}
        }

        return response()->json([
                'error'=>false,
                'msg'=>'Success',
                'data' => $data,
            ], 200);
    }

}

