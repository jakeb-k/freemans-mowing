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
       
        return view('index'); 
    }
    public function index()
    {
        $posts = Post::all()->reverse();

        return view('dashboard')->with('posts', $posts); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $post = new Post(); 
        return view('create')->with('post',$post); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        print('Hit store'); 
        $this->validate($request, [
            'title'=>'required:max:75',
            'description'=>'required',
            'review'=>'required',
            'imageFile' => 'required',
            'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048'
        ]);

        //MULTI IMAGE UPLOAD CODE
        $count = 0; 
        foreach ($request->file('imageFile') as $file) {   
            $count++; 
            $fileName = time() .$count. '.' . $file->extension();
            $path = $file->storeAs('public/images', $fileName); 
            $images[] = $fileName; 
        }

        $post = new Post(); 
        $post->title = $request->title;
        $post->description = $request->description;
        $post->review = $request->review; 
        $post->images = implode(",",$images); 
        $post->save(); 

        $posts = Post::all()->reverse(); 
        return redirect('/posts')->with('posts',$posts); 
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
        $post = Post::find($id);

        return view('create')->with('post',$post); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      

        $this->validate($request, [
            'title'=>'required:max:75',
            'description'=>'max:500',
            'review'=>'max:500',
            'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $post = Post::find($id); 
        $count = 0; 
        if($request->file('imageFile')) {
            foreach ($request->file('imageFile') as $file) {   
                $count++; 
                $fileName = time() .$count. '.' . $file->extension();
                $path = $file->storeAs('public/images', $fileName); 
                $images[] = $fileName; 
            }
            $img =  implode(",", $images);
        } else {
            $img = $post->image; 
        }
       
        $post->title = $request->title;
        $post->description = $request->description ?? $post->description;
        $post->review = $request->review ?? $post->review; 
        $post->images = $img; 
        $post->save(); 
        $posts = Post::all()->reverse(); 
        return redirect('/posts')->with('posts',$posts); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        $posts = Post::all()->reverse(); 
        return redirect()->back()->with('posts', $posts); 
    }
}
