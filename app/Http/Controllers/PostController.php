<?php

namespace App\Http\Controllers;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('pages.news', compact('posts'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); //one per page
        return view('post.post');
        // ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); //one per pag
        return view('post.post')->with('posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=> 'required',
            'cover_image'=> 'image|nullable|max:1999'
        ]);
        if($request->hasFile('cover_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else { 
                $fileNameToStore ='noimage.jpg';
        }
        $post = new Post;
        $post->title = $request->input('title');  
        $post->body = $request->input('body');
       // $post->user_id = auth()->user()->id;
       $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/post')->with('success', 'Post Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post =Post::find($id);
       return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit')->with('post', $post);
        
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
        $this->validate($request,[
            'title'=>'required',
            'body'=> 'required',
            'cover_image'=> 'image|nullable|max:1999'
        ]);
        if ($request->hasFile('cover_image')) {
            // get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
      
        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
    
        $post->save();
    
        return redirect('/edit')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/post')->with('success', 'Post Removed');

    }
}
