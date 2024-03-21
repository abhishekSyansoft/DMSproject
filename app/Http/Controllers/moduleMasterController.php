<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ModuleMaster;
use Illuminate\View\View;

class moduleMasterController extends Controller
{
    public function Modules(){
        $module = ModuleMaster::paginate(5);
        return view("modules",compact("module"));
    }

    public function AddModules(){
        return view('admin.modules.createModule');
    }

    public function StoreModules(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:70',
        ]);

        $name = $request->name;

        ModuleMaster::insert([
            'name'=>$request->name,
            'created_at'=> Carbon::now()
        ]);
        return redirect()->back()->with('message','Module added successfully');
    }

    public function DeleteModules($id){
        ModuleMaster::find($id)->delete();
        return redirect()->back()->with('error','Module deleted successfully');
    }

    public function EditModules($id){
        $module = ModuleMaster::findOrFail($id);
        return view('admin.modules.editModule',compact('module'));
    }

    public function UpdateModules(Request $request,$id){
        $validated = $request->validate([
            'name'=> 'required',
        ]);
        ModuleMaster::find($id)->update([
            'name'=>$request->name,
        ]);
        return redirect()->back()->with('info','Module updated successfully');
    }

}
