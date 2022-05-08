<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('published_at', 'DESC')->get();

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione del form
        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'published_at' =>'nullable|date|before_or_equal:today',
            'category_id'=>'nullable'
        ]);

        $data = $request->all();

        // creazione dello slug
        $slug = Str::slug($data['title']);

        $contatore = 1;

        // creazione variabile e controllo se esiste uno slug uguale a quello creato
        $post_present = Post::where('slug',$slug)->first();

        // creazione contatore per cambiare slug
        while ($post_present) {
            $slug=Str::slug($data['title']).'-'.$contatore;
            $contatore++;
            $post_present = Post::where('slug',$slug)->first();
        }

        $post = new Post();
        $post->fill( $data );
        $post->slug = $slug;

        $post->save();

        return redirect()->route('admin.posts.index');


        dd($request->all(),$slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit',compact('post','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // validazione del form
        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'published_at' =>'nullable|date|before_or_equal:today'
        ]);

        $data = $request->all();
        // generazione nuovo slug se il titolo cambia
        if( $post->title != $data['title']){
            $slug = Str::slug($data['title']);

            $contatore = 1;

            $post_present = Post::where('slug',$slug)->first();

            while ($post_present) {
                $slug=Str::slug($data['title']).'-'.$contatore;
                $contatore++;
                $post_present = Post::where('slug',$slug)->first();
            }
        }
        $data['slug']=$slug;
        $post->update($data);


        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // eliminazione del post
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
