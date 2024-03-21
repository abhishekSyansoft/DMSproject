<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\ModuleMaster;
use App\Models\RoleMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class roleMasterController extends Controller
{
    //
    public function Role(){
        $role = RoleMaster::all();
        return view("roles",compact("role"));
    }

    public function AddRole(){
        return view("admin.role.createRole");
    }

    public function StoreRole(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:70',
        ]);

        $name = $request->name;

        RoleMaster::insert([
            'name'=>$request->name,
            'created_at'=> Carbon::now()
        ]);
        return redirect()->back()->with('message','Role added successfully');
    }


    public function DeleteRole($id){
        RoleMaster::find($id)->delete();
        return redirect()->back()->with('error','Role deleted successfully');
    }

    public function EditRole($id){
        $role = RoleMaster::findOrFail($id);
        return view('admin.role.editRole',compact('role'));
    }

    public function UpdateRole(Request $request,$id){
        $validated = $request->validate([
            'name'=> 'required',
        ]);
        RoleMaster::find($id)->update([
            'name'=>$request->name,
        ]);
        return redirect()->back()->with('info','Role updated successfully');
    }


    public function allUsers(){
        $users = User::all();
        return view("userMaster",compact('users'));
    }

    public function DeleteUser($id){
        $users = User::find($id)->delete();
        return redirect()->back()->with('error','User Deeleted form database. Now there is no record fot this user.');
    }

    public function UpdateRoledata(Request $request, $id){
        $validatedata = $request->validate([
            'designation'=> 'required|max:50',
            'role' => 'required'
        ]);

        User::findOrFail($id)->update([
            'role'=> $request->role,
            'designation'=> $request->designation,
        ]);
        return redirect()->back()->with('message','Userrole updated sucessfully');
    }


    public function NewUser(Request $request)
    {
        $validatedata = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|max:100',
            'password'=> 'required|min:8',
            'role'=> '',
            'designation'=> '',
        ]);

        $user = User::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'role'=> $request->role,
            'designation'=> $request->designation,
            'created_at'=> Carbon::now('Asia/Kolkata'),

        ]);
        return redirect()->back()->with('message','User created successfully');
    }


    public function UpdateUser($id){
        $user = User::findOrFail($id);
        return view('updateUser',compact('user'));
    }

}
