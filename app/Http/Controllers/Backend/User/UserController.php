<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Users';
        $data['active'] = $active;

        return view('backend.user.index', $data);
    }

    public function search(Request $request){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Users';
        $data['active'] = $active;

        $search = $request->search;
        $results = User::where('name', 'LIKE', '%' . $search . '%')
                                        ->orderBy('name', 'ASC')
                                        ->paginate(10);
        $data['results'] = $results;

        return view('backend.user.search', $data);
    }

    public function add(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Users';
        $data['active'] = $active;
        
        return view('backend.user.add', $data);
    }

    public function store(Request $request){
        $code = date('YdHi');
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->day . ' ' . $request->month . ' ' . $request->year;
        $user->role_id = $request->role_id;
        $user->password = bcrypt($code);
        if( $request->file('image') ){
            $image = $request->file('image');
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = date('YmdHi'). '.' . $image_extension;
            $upload_location = 'storage/images/users/';
            if(isset($user->image)){
                if(file_exists(public_path($upload_location . $user->image))){
                    unlink($upload_location . $user->image);
                }
                $image->move($upload_location, $image_name);
                $user->image = $image_name;                    
            }else{
                $image->move($upload_location, $image_name);
                $user->image = $image_name;
            }              
        }
        $user->save();

        return redirect()->route('admin.user');
    }

    public function edit($id){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Users';
        $data['active'] = $active;

        $user = User::find($id);

        return view('backend.user.edit', $data);
    }

    public function update(Request $request, $id){
        // $code = date('YmdHi');
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->day . ' ' . $request->month . ' ' . $request->year;
        $user->role_id = $request->role_id;
        // $user->password = bcrypt($code);
        if( $request->file('image') ){
            $image = $request->file('image');
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = date('YmdHi'). '.' . $image_extension;
            $upload_location = 'storage/images/users/';
            if(isset($user->image)){
                if(file_exists(public_path($upload_location . $user->image))){
                    unlink($upload_location . $user->image);
                }
                $image->move($upload_location, $image_name);
                $user->image = $image_name;                    
            }else{
                $image->move($upload_location, $image_name);
                $user->image = $image_name;
            }              
        }
        $user->save();

        return redirect()->route('admin.user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.user');
    }
}
