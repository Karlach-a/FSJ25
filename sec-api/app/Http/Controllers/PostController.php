<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::with('user')->get();

        return response()->json([
            'data'=>$posts
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
    public function store(Request $request)
    {
    
        //comenzamos validando el post
try{
        $request->validate([
            'title'=> 'required|string|max:255',
            'content'=>'required|string',
            //'User_id'=>'required|integer'
        ]);

        //una forma de crear el post
       // $post=$request->user()->posts()->create($request->all());

        //Otra forma de crear un post 

        $post = Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>$request->user()->id
        ]);

        return response()->json([
            'message'=>'Post created succesfully',
            'data'=>$post
        ],201);

    }catch(Exception $error){
        return response()->json([
            'error'=>$error->getMessage()
        ],400);
    }
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
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required|string'
        ]);

        $post->update($request->all());

        return response()->json([
            'message'=>'Post update sucessfully',
            'data'=>$post

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json([
            'message'=>'Post deleted succesfully'

        ]);
    }
}
