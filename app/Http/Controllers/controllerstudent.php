<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class controllerstudent extends Controller
{
    public function showdata(){
$students = student::orderBy('id','DESC')->get();

        return view('showdata',compact('students'));
    }

    public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'email' =>'required',
        'phone' =>'required',
        'address' =>'required',
        'dept' =>'required',
    ],[
         'name.required' => 'please input your name',
    ]);
    student::insert([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'dept' => $request->dept,
        'gender' => $request->gender,
        'marks' => $request->marks,
        'reg' => $request->reg,
        'batch' => $request->batch,

    ]);
    return redirect()->back()->with('success','data successfully submited');
    }
    public function edit($id){
        $student = student::findOrFail($id);
        return view('edit',compact('student'));
    }
    public function update(Request $request,$id){
        student::findOrFail($id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'dept' => $request->dept,
        'gender' => $request->gender,
        'marks' => $request->marks,
        'reg' => $request->reg,
        'batch' => $request->batch,

        ]);
        return redirect()->to('/')->with('update','data successfully updated');

    }
    public function destroy($id){
         student::findOrFail($id)->delete();
          return redirect()->back()->with('delete','data successfully Daleted');

    }
}
