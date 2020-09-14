<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Image;


class AdminController extends Controller
{
    public function courses(Request $request){
		
		if($request->isMethod('post')){

            $rules = array(
                'cover_image' => 'required|mimes:jpeg,jpg,png',
                'title' => 'required',
                'duration' => 'required',
                'price' => 'required',	
                'instructor' => 'required',
                'description' => 'required',
                'lang' => 'required',
            );
    
            $params = $request->all();
            $validator = Validator::make($params, $rules);
            if($validator->fails())
			{
				return redirect()->back()->withErrors($validator);
			}
            
            if($request->hasfile('cover_image')){
                
                $filename = $request->cover_image->getClientOriginalName();
				$destination=storage_path('../public/course');
                $request->cover_image->move($destination,$filename);
				$path="/".$filename;
				
				DB::table('courses')->insert(
					[
						'title' => $request->title,
						'duration' => $request->duration,
						'price' => $request->price,
						'discount_price' => $request->discount_price,
						'cover_image' => $filename,
						'instructor' => $request->instructor,
						'description' => $request->description,
						'lang' => $request->lang,
				]);
			}
		}
	$courses=DB::table('courses')->get();
	return view('admin.courses')->with(compact('courses'));
    }
}
