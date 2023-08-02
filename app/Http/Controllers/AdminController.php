<?php

namespace App\Http\Controllers;
use App\Models\org;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
   
    public function index()
    {
    // return view('admin.home');
     $org = org::all();
    return view('admin.home')->with('org', $org);
    // ;
    }
    public function addpost()
    {
        $post = post::all();
        
    return view('post.post')->with('post', $post);;
    }
    public function addview()
    {
    return view('admin.add_org');
    }
    public function orgedit()
    {
    return view('admin.orgedit');
    }
    public function edit()
    {
       
    return view('post.edit');
    }
    public function show()
    {
    return view('post.show');
    }
    public function orgshow()
    {
    return view('post.orgshow');
    }
    

}
