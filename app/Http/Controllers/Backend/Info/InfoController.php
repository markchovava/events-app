<?php

namespace App\Http\Controllers\Backend\Info;

use App\Http\Controllers\Controller;
use App\Models\Info\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function edit(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Info';
        $data['active'] = $active;
        $info = Info::first();
        $data['info'] = isset($info) ? $info : NULL;
        // dd($data['info']);
        return view('backend.info.edit', $data);
    }

    public function store(Request $request){
        $info = new Info();      
        $info->name = $request->name;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->address = $request->address;
        if( $request->file('image') ){
            $image = $request->file('image');
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = date('YmdHi'). '.' . $image_extension;
            $upload_location = 'storage/images/info/logo/';
            if(isset($info->image)){
                if(file_exists(public_path($upload_location . $info->image))){
                    unlink($upload_location . $info->image);
                }
                $image->move($upload_location, $image_name);
                $info->image = $image_name;                    
            }else{
                $image->move($upload_location, $image_name);
                $info->image = $image_name;
            }              
        }
        $info->save();

        return redirect()->route('admin.info.view');
    }

    public function update(Request $request, $id){
        $info = Info::find($id);      
        $info->name = $request->name;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->address = $request->address;
        if( $request->file('image') ){
            $image = $request->file('image');
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = date('YmdHi'). '.' . $image_extension;
            $upload_location = 'storage/images/info/logo/';
            if(isset($info->image)){
                if(file_exists(public_path($upload_location . $info->image))){
                    unlink($upload_location . $info->image);
                }
                $image->move($upload_location, $image_name);
                $info->image = $image_name;                    
            }else{
                $image->move($upload_location, $image_name);
                $info->image = $image_name;
            }              
        }
        $info->save();

        return redirect()->route('admin.info.view');
    }

    public function view(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Info';
        $data['active'] = $active;
        $info = Info::first();
        $data['info'] = $info;
        return view('backend.info.view', $data);
    }
}
