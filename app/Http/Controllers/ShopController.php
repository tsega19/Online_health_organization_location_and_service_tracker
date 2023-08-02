<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function index(Request $request) {

        $latitude       =       "28.418715";
        $longitude      =       "77.0478997";

        $shops          =       DB::table("shops");

        $shops          =       $shops->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                * cos(radians(latitude)) * cos(radians(longitude) - radians(" . $longitude . "))
                                + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"));
        $shops          =       $shops->having('distance', '<', 20);
        $shops          =       $shops->orderBy('distance', 'asc');

        $shops          =       $shops->get();

        return view('shop-listing', compact("shops"));
    }


    // ------------ load shop view ---------------
    public function create() {
        return view('create-shop');
    }


    // ----------------- save shop detail ----------------------
    public function store(Request $request) {

        $request->validate([
            "shop_name"     =>  "required",
            "location"      =>  "required",
            "filename"      =>  "required|mimes:jpeg,png,jpg,bmp|max:2048"
        ]);
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
        // if($file            =       $request->file('file')) {
        //     $image_name         =       time().'.'.$file->getClientOriginalExtension();
        //     $target_path        =       public_path('/uploads/');

        //     if($file->move($target_path, $image_name)) {
        //         $dataArray      =       array (
        //             "shop_name"         =>      $request->shop_name,
        //             "address"           =>      $request->location,
        //             "description"       =>      $request->description,
        //             "latitude"          =>      $request->latitude,
        //             "longitude"         =>      $request->longitude,
        //             // "image"             =>      ""
        //         );

        //         $shop           =       Shop::create($dataArray);

        //         if(!is_null($shop)) {
        //             return back()->with("success", "Shop details saved successfully");
                    $shop = new shop;
                    $shop->shop_name = $request->input('shop_name');  
                    $shop->address = $request->input('address');
                    $shop->description = $request->input('description');
                    $shop->latitude = $request->input('latitude');
                    $shop->longitude = $request->input('longitude');
                   
                //    $org->user_id = auth()->user()->id;
                   $shop->image = $fileNameToStore;
                    $shop->save();
                    return back()->with('success', 'Shop details saved successfully');
                }
                }
            
        
    
