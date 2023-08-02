<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(){

       
        // if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        //     $search_text = $_GET['query'];
        //     $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
        //     // $countries->appends($request->all());
        //     return view('search',['countries'=>$countries]);
            
        // }else{
        //      return view('search');
        // }
        // return view('pages.index');
       
    }
//     function find(Request $request){
//         $request->validate([
//           'query'=>'required|min:2'
//        ]);

//        $search_text = $request->input('query');
//        $orgs = DB::table('org')
//                   ->where('name','LIKE','%'.$search_text.'%')
//                 //   ->orWhere('SurfaceArea','<', 10)
//                 //   ->orWhere('LocalName','like','%'.$search_text.'%')
//                   ->paginate(2);
//         return view('page.index',['orgs'=>$orgs]);

// }
}
