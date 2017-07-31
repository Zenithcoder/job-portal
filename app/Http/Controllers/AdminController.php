<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jd;

class AdminController extends Controller
{
    public function Index()
    {
    	
    	return view('admin.index');
    }

    public function Job()
    {
    	 
        return view('admin.job');
    }

    public function AllRole()
    {
         $roles= jd::all();
        return view('admin.all',compact('roles'));
    }
 

 public function EditRole($id)
    {
         $eroles = jd::find($id);
        return view('admin.editrole',compact('eroles'));
    }

     public function  DeleteJd(Request $reqeust, $id)
    {
        $jobrole =jd::find($id);
        
        $jobrole->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'role'=>'required',
            'company'=> 'required',
            'resp'=>'required',
            'qual'=>'required',
            'deadline'=>'required',
            'sector'=>'required',
            'skill'=>'required'
            ]);

        jd::find($id)->update($request->all());
        return redirect()->route('admin.job')
                        ->with('message','Item updated successfully');
    }


    public function Jd(Request $request)
    {
          $this->validate($request,[
            'role'=>'required',
            'company'=> 'required',
            'resp'=>'required',
            'qual'=>'required',
            'deadline'=>'required',
            'sector'=>'required',
            'skill'=>'required'
            ]);
            
            jd::create($request->all());

         return Redirect()->route('admin.job')->with('message', 'A Role has been created successfully');
    }
}
