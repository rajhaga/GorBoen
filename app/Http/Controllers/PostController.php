<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    Public function index(){

        return view('blog',[
            "title" => "Blog",
            "content" => Post::all(),
            
    ]
    );
    }

    Public function home(){

        return view('index',[
            "title" => "index",
            "content" => Post::all(),
            "wisata" => Post::allwisata(),
            
    ]);
    }

    Public function allkebun(){

        return view('packages',[
            "title" => "Wisata",
            "wisata" => Post::allwisata(),
            
            
    ]);
    }

    

    public function blogdetail($_id){
        
        return view('blogdetail', [
            "post" => Post::find($_id)
        ]);

    }

    public function wisatadetail($_id){
        
        return view('wisatadetail', [
            "post" => Post::allwisata($_id)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
