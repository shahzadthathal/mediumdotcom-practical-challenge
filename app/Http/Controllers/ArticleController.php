<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Articles;
use App\Models\Topics;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $articles = Articles::where('status',1)->paginate(15);
            return ArticleResource::collection($articles);

        }catch(\Throwable | \Error | \Exception $e){
            return response()->json([
                    'error'=>true,
                    'msg' =>"Network error",
                    'errorMsg' =>$e->getMessage(),//errorMsg for developers to debug what is actual error.
                    'data' => null
            ], 201);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latest()
    {
        try{

            $articles = Articles::where('status',1)->orderBy('created_at','desc')->limit(5)->get();
            foreach($articles as $key=>$article){
                if($key==0){
                    $data['leftSideArticle'] = new ArticleResource($article);
                }elseif($key==4){
                    $data['rightSideArticle'] = new ArticleResource($article);
                }else{
                    $data['centerSideArticles'][] = new ArticleResource($article);
                }
            }

            return response()->json([
                    'error'=>false,
                    'msg'=>'Success',
                    'data' => $data,
                ], 200);
        
        }catch(\Throwable | \Error | \Exception $e){
            return response()->json([
                    'error'=>true,
                    'msg' =>"Network error",
                    'errorMsg' =>$e->getMessage(),
                    'data' => null
            ], 201);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function featured()
    {
        try{

            #We will take is_featured =1 in where clause but for now take random
            $featuredArticles = Articles::where('status',1)->inRandomOrder()->limit(4)->get();

            $data['featuredArticles'] = ArticleResource::collection($featuredArticles);

            return response()->json([
                    'error'=>false,
                    'msg'=>'Success',
                    'data' => $data,
                ], 200);

        }catch(\Throwable | \Error | \Exception $e){
            return response()->json([
                    'error'=>true,
                    'msg' =>"Network error",
                    'errorMsg' =>$e->getMessage(),
                    'data' => null
            ], 201);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function topicWise()
    {
        try{

            $topics = Topics::where('status',1)->inRandomOrder()->limit(4)->get();
            foreach($topics as $key=>$topic){
                $articles = Articles::where(['status'=>1, 'topic_id'=>$topic->id])->orderBy('created_at','desc')->limit(5)->get();
                $data[] = [
                        'name'=>$topic->name,
                        'slug'=>$topic->slug,
                        'articles'=> ArticleResource::collection($articles),
                ];
            }

            return response()->json([
                    'error'=>false,
                    'msg'=>'Success',
                    'data' => $data,
                ], 200);

        }catch(\Throwable | \Error | \Exception $e){
            return response()->json([
                    'error'=>true,
                    'msg' =>"Network error",
                    'errorMsg' =>$e->getMessage(),
                    'data' => null
            ], 201);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        try{

            #We will take is_popular =1 in where clause but for now take random
            $popularArticles = Articles::where('status',1)->inRandomOrder()->limit(4)->get();

            $data['popularArticles'] = ArticleResource::collection($popularArticles);

            return response()->json([
                    'error'=>false,
                    'msg'=>'Success',
                    'data' => $data,
                ], 200);

        }catch(\Throwable | \Error | \Exception $e){
            return response()->json([
                    'error'=>true,
                    'msg' =>"Network error",
                    'errorMsg' =>$e->getMessage(),
                    'data' => null
            ], 201);
        }
    }


    
    /**
     * Display the specified resource.
     *
     * @param  string  $topic, string slug
     * @return \Illuminate\Http\Response
     */
    public function show($topic, $slug)
    {
    
        $article = Articles::where('slug',$slug)->first();
        if($article===null)
            return redirect('/');

         return view('articles.show')->with('item', $article);

    }

}