<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'tahun_masuk' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required'
            // 'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);

        if ( $validator->passes() ) {

            
            $student = Student::create($request->post());

            // Upload image here
            // if ($request->image) {
            //     $ext = $request->image->getClientOriginalExtension();
            //     $newFileName = time().'.'.$ext;
            //     $request->image->move(public_path().'/uploads/student/',$newFileName); // This will save file in a folder
                
            //     $student->image = $newFileName;
            //     $student->save();
            // }
            
            return redirect()->route('user.index')->with('success','Data kamu berhasil ditambahkan');


        } else {
            // return with errrors
            return redirect()->route('user.create')->withErrors($validator)->withInput();
        }
    }

    public function edit(Student $student) {
        //$employee = Employee::findOrFail($id);       
        return view('user.edit_user',['student' => $student]);
    }

    public function update(Student $student, Request $request) {

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'tahun_masuk' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required'
            // 'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);

        if ( $validator->passes() ) {

            $student->fill($request->post())->save();

            // Upload image here
            // if ($request->image) {
            //     $oldImage = $employee->image;

            //     $ext = $request->image->getClientOriginalExtension();
            //     $newFileName = time().'.'.$ext;
            //     $request->image->move(public_path().'/uploads/employees/',$newFileName); // This will save file in a folder
                
            //     $employee->image = $newFileName;
            //     $employee->save();

            //     File::delete(public_path().'/uploads/employees/'.$oldImage);
            // }            

            return redirect()->route('user.index')->with('success','Data kamu berhasil diupdate.');


        } else {
            // return with errrors
            return redirect()->route('user.edit',$student->id)->withErrors($validator)->withInput();
        }
    }
}
