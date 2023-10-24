<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact; 
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $posts = Post::all(); 
        return view('index')->with('posts', $posts); 
    }
    public function index()
    {
        $posts = Post::all(); 
        return view('dashboard')->with('posts', $posts); 
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


    }

    public function contact(Request $request)
    {
         $this->validate($request,[
            'name'=>'required|max:55',
            'email'=>'required|email',
            'note'=>'required'
        ]);
        
        Contact::create($request->all()); 
        
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id); 
        $images = explode(",",$post->images); 
        
        return view('post')->with('post',$post)->with('images',$images); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
