<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\org;
class AddController extends Controller
{
    public function search(Request $request){
       
        $search = $request->input('search');
  
        $orgs = Org::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('city', 'LIKE', "%{$search}%")
                    ->orWhere('country', 'LIKE', "%{$search}%")
                    ->orWhere('servies', 'LIKE', "%{$search}%")
                    ->orWhere('orgtype', 'LIKE', "%{$search}%")
                    // ->orWhere('city', 'LIKE', "%{$search}%")
                    ->get();
        
        return view('search', compact('orgs'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       
       
        $orgs=Org::OrderBy('created_at', 'desc')->paginate(10);
      
        return view ('post.post')->with('orgs', $orgs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_org');
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
            'name'=>'required',
            'email'=> 'required',
            'phone'=> 'required',
            'orgtype'=> 'required',
            'country'=> 'required',
            'city'=>'required',
            'lat'=> 'required',
            'lng'=> 'required',
            'facebook'=> 'required',
            'telegram'=> 'required',
            'twitter'=> 'required',
            'service'=> 'required',
            'section'=> 'required',
            'email'=> 'required',
            'image'=> 'image|nullable|max:1999'
        ]);

        // $lat = 9.080977012150791;
        // $lng =36.58267230202887;
         
            
        // $data = DB::table("orgs")
        //     ->select("orgs.id"
        //         ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
        //         * cos(radians(orgs.lat)) 
        //         * cos(radians(orgs.lon) - radians(" . $lng . ")) 
        //         + sin(radians(" .$lat. ")) 
        //         * sin(radians(orgs.lat))) AS distance"))
        //         ->groupBy("orgs.id")
        //         ->get();
        
        // dd($data);

        if($request->hasFile('image')){
            // get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/cover_image', $fileNameToStore);
        } else { 
                $fileNameToStore ='noimage.jpg';
        }
        $org = new org;
        $org->name = $request->input('name');  
        $org->email = $request->input('email');
        $org->phone = $request->input('phone');
        $org->orgtype = $request->input('orgtype');
        $org->country = $request->input('country');
        $org->city = $request->input('city');
        $org->lat = $request->input('lat');
        $org->lng = $request->input('lng');
        $org->facebook = $request->input('facebook');
        $org->telegram= $request->input('telegram');
        $org->twitter = $request->input('twitter');
        $org->service = $request->input('service');
        $org->section = $request->input('section');

    //    $org->user_id = auth()->user()->id;
       $org->image = $fileNameToStore;
        $org->save();
        return redirect('/admin')->with('success', 'User Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $org=org::find($id);
       return view('admin.orgshow')->with('org', $org);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
