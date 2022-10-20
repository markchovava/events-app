<?php

namespace App\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use App\Models\Role\Role;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RoleController extends Controller
{

    public function index(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Roles';
        $data['active'] = $active;

        $roles = Role::orderBy('name', 'ASC')->paginate(10);
        $data['roles'] = $roles;
        return view('backend.role.index', $data);
    }

    public function search(Request $request){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Roles';
        $data['active'] = $active;

        $search = $request->search;
        $data['search'] = $search;
        $results = Role::where('name', 'LIKE', '%' . $search . '%')
                                ->orderBy('name', 'ASC')
                                ->paginate(10);
        $data['results'] = $results;
        return view('backend.role.index', $data);
    }

    public function add(){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Roles';
        $data['active'] = $active;

        return view('backend.role.add', $data);
    }

    public function edit($id){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Roles';
        $data['active'] = $active;

        $role = Role::find($id);
        $data['role'] = $role;

        return view('backend.role.edit', $data);
    }

    public function view($id){
        $title = 'Event';
        $data['title'] = $title;
        $active = 'Roles';
        $data['active'] = $active;

        $role = Role::find($id);
        $data['role'] = $role;

        return view('backend.role.view', $data);
    }


    public function store(Request $request){
        $role = new Role();
        $role->name = $request->name;
        $role->level = $request->level;
        $role->save();

        return redirect()->route('admin.role');
    }
    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->name = $request->name;
        $role->level = $request->level;
        $role->save();

        return redirect()->route('admin.role');
    }
    public function delete($id){
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('admin.role');
    }
}
