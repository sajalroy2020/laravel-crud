<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class crudController extends Controller
{
    public function showData(){
        $showData = Crud::all();
        // $showData = Crud::paginate(5);
        return view('showData', compact('showData'));
    }

    public function addData(){
        return view('addData');
    }

    public function storeData(Request $request){
        $rules = [
            'name' => 'required|max:20',
            'email' => 'required|email',
        ];
        $cv =[
            'name.required'=>'Enter your name',
            'name.max'=>'your name can not contain more than 20 ch',
            'email.required'=>'Enter your email',
            'email.email'=>'email must be valid email',
        ];


        

        $this->validate($request, $rules, $cv);
        $Crud = new Crud();
        $Crud->name = $request->name;
        $Crud->email = $request->email;
        $Crud->save();
        Session::flash('msg', 'data added Successfully');
        return redirect('/');
        // return $request->all();
    }

    public function editData($id=null){
        $editData = Crud::find($id);
        return view('editData', compact('editData'));
    }

    public function updateData(Request $request, $id){
        $rules = [
            'name' => 'required|max:20',
            'email' => 'required|email',
        ];
        $cv =[
            'name.required'=>'Enter your name',
            'name.max'=>'your name can not contain more than 20 ch',
            'email.required'=>'Enter your email',
            'email.email'=>'email must be valid email',
        ];

        $this->validate($request, $rules, $cv);
        $Crud = Crud::find($id);
        $Crud->name = $request->name;
        $Crud->email = $request->email;
        $Crud->save();
        Session::flash('msg', 'data Updated Successfully');
        return redirect('/');
        // return $request->all();
    }

    public function deleteData($id=null){
        $deleteData=Crud::find($id);
        $deleteData->delete();
        Session::flash('msg', 'data deleted Successfully');
        return redirect('/');
    }
}
