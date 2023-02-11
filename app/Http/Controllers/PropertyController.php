<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // public function hospitalsInfoshow($id){
        

    //     $cityId= DB::table('hospitals')->where('subcity_id',$id)->select('city_id','subcity_id')->first(); //--for left_side
    //     $subcity=DB::table('subcities')->where('city_id',$cityId->city_id)->get();  //--for right_side
    //     $count=DB::table('hospitals')->where('subcity_id',$id)->select('subcity_id')->get();  //--for Count_properties

    //     return view('pages.properties',compact('hospital','cityId','subcity','count'));
    //     // dd($property,$cityId,$subcity);
    // }


//-------------for All_Subcity_Property_View/showing-------------------
    public function subcityPropertyView($id){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->where('subcity_id',$id)
                ->whereIn('status', [1,2])
                ->select('user_properties.*','cities.city_name')
                ->paginate(4);

        $hospital=DB::table('hospitals')
                ->join('cities','hospitals.city_id','cities.id')
                ->where('subcity_id',$id)
                ->select('hospitals.*')
                ->get();
        
        $school=DB::table('schools')
                ->join('cities','schools.city_id','cities.id')
                ->where('subcity_id',$id)
                ->select('schools.*')
                ->get();

        $park=DB::table('parks')
                ->join('cities','parks.city_id','cities.id')
                ->where('subcity_id',$id)
                ->select('parks.*')
                ->get();

        $market=DB::table('markets')
                ->join('cities','markets.city_id','cities.id')
                ->where('subcity_id',$id)
                ->select('markets.*')
                ->get();

        $cityId= DB::table('user_properties')->where('subcity_id',$id)->select('city_id','subcity_id')->first(); //--for left_side
        $subcity=DB::table('subcities')->where('city_id',$cityId->city_id)->get();  //--for right_side
        $count=DB::table('user_properties')->where('subcity_id',$id)->whereIn('status', [1,2])->select('subcity_id')->get();  //--for Count_properties

        return view('pages.properties',compact('hospital','school','park','market','property','cityId','subcity','count'));
        // dd($property,$cityId,$subcity);
    }

//-------------for All_City_Property_View/showing-------------------
    public function cityPropertyView($id){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->where('city_id',$id)
                ->whereIn('status', [1,2])
                ->select('user_properties.*','cities.city_name')
                ->paginate(4);

        $hospital=DB::table('hospitals')
                ->join('cities','hospitals.city_id','cities.id')
                ->where('city_id',$id)
                ->select('hospitals.*')
                ->get();
        
        $school=DB::table('schools')
                ->join('cities','schools.city_id','cities.id')
                ->where('city_id',$id)
                ->select('schools.*')
                ->get();

        $park=DB::table('parks')
                ->join('cities','parks.city_id','cities.id')
                ->where('city_id',$id)
                ->select('parks.*')
                ->get();

        $market=DB::table('markets')
                ->join('cities','markets.city_id','cities.id')
                ->where('city_id',$id)
                ->select('markets.*')
                ->get();

        $cityId= DB::table('user_properties')->where('city_id',$id)->select('city_id')->first(); //--for left_side
        $subcity=DB::table('subcities')->where('city_id',$cityId->city_id)->get();  //--for right_side
        $count=DB::table('user_properties')->where('city_id',$id)->whereIn('status', [1,2])->select('city_id')->get();  //--for Count_properties

        return view('pages.properties',compact('hospital','school','park','market','property','cityId','subcity','count'));
        // dd($property,$cityId,$subcity);
    }


//-------------------Property_Details_Page--------------------------
    public function PropertyDetails($id){
    	$property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('user_properties.id',$id)
                ->whereIn('status', [1,2])
                ->first();

        return view('pages.property_details',compact('property'));
        //dd($property);
    }



}
