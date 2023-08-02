<?php

namespace App\Http\Controllers;
use App\Models\org;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller


{ 
         public function index()
             {      
        $orgs = org::all();
       return view('pages.index')->with('orgs', $orgs);
             }
         public function news()
             {
               $posts = Post::all();
                //one per page
;               // ;
               return view('pages.news')->with('posts', $posts);
               // 
             }
         public function about()
             {
            return view('pages.about');
             }
        //      public function edit()
        //      {
        //       //  $post = Post::all();

        // // return view('post.edit')->with('post', $post);  
            
        //      }

          //  public function create(){
          //   return view('create');
          //  }

            
            //  public function indexx()
            //  {

//           $posts = Post::all();
//                 //one per page
// ;               // ;
//                return view('pages.index')->with('posts', $posts);
//                // 
//              }
}
