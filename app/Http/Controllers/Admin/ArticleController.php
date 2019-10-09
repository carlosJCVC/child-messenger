<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\Article;
use App\Models\Redactor;
use db;
use Session;
use Redirect;
class ArticleController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
      //$articles = Article::where('article_title', 'articles')->first();
      //$articles = $article->users;
    //$articles = Article::where('redactor_id', $request->redactor()->id)->get();
//dd('hbdhsbhdbsdbs');
      $articles = Article::where('redactor_id', $request->user()->id)->get();

        return view('admin.articles.index', [ 'articles' => $articles ]);
    // return view('admin.articles.index');
  //  return view('admin.articles.index', [ 'articles' => $articles ]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd('dsdsdsd');
       


    }
}
