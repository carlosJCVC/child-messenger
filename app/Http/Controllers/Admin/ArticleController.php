<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use DB;
/**
use Session;
use Redirect;
*/
class ArticleController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::where('user_id', $request->user()->id)->get();
        $count = $articles->count();

        return view('admin.articles.index', [ 'articles' => $articles , 'count' => $count ]);
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
        $files = $request->file('article_image');

        $article = new Article([
            'article_title'=>$request->input('article_title'),
            'article_author'=>$request->input('article_author'),
            'article_keywords'=>$request->input('article_keywords'),
            'article_content'=>$request->input('article_content'),
            'article_bibliography'=>$request->input('article_bibliography'),
            'user_id'=>$request->user()->id
        ]);
        $article->save();

        $i=1;
        foreach ($files as $key => $file) {
            $filename  = 'article-image-' . $i .'-' . time() . '.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('article_images', $filename);
            
            $article_image = new ArticleImage([
                'name' => $filename,
                'ext' => $file->getClientOriginalExtension(),
                'path' => $path,
                'article_id' => $article->id
            ]);
            
            $article_image->save();
            $i++;
        }
        
        return redirect(route('admin.articles.index'))->with([ 'message' => 'Articulo creado exitosamente!', 'alert-type' => 'success' ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();

        return view('admin.articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();

        return view('admin.articles.edit')->with('article', $article);
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
        if($request->hasFile('article_image')){

            $files = $request->file('article_image');

            $images = ArticleImage::where('article_id', $id)->get();
            
            foreach ($images as $key => $image) {
                Storage::delete($image->path);
            }
            
            $i=1;
        
            foreach ($files as $key => $file) {
                $filename  = 'article-image-' . $i .'-' . time() . '.'. $file->getClientOriginalExtension();
                $path = $file->storeAs('article_images', $filename);
            
                $article_image = new ArticleImage([
                    'name' => $filename,
                    'ext' => $file->getClientOriginalExtension(),
                    'path' => $path,
                    'article_id' => $article->id
                ]);
                
                $article_image->save();
                $i++;
            }

        }

        $aux = DB::table('articles')->where('id', $id);
        
        $article = $aux->update(['article_title'=>$request->input('article_title'),
                'article_author'=>$request->input('article_author'),
                'article_keywords'=>$request->input('article_keywords'),
                'article_content'=>$request->input('article_content'),
                'article_bibliography'=>$request->input('article_bibliography')]);
        
        return redirect(route('admin.articles.index'))->with([ 'message' => 'Articulo modificado exitosamente!', 'alert-type' => 'success' ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $files = ArticleImage::where('article_id', $id)->get();
        foreach ($files as $key => $file) {
            Storage::delete($file->path);
        }

        $article = DB::delete('delete from articles where id = ?',[$id]);

        return redirect(route('admin.articles.index'))->with([ 'message' => 'Articulo eliminado exitosamente!', 'alert-type' => 'success' ]);
    }
}
