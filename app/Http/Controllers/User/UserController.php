<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
/**
 * Class SubscriptionController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_submit(Request $request)
    {
        /*$request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('user_dashboard');
        } else {
            return redirect()->back()->with('error', 'Information is not correct!');
        } */
        echo 'Hallo';
    }

    public function index() {

        $student = Student::where('id')->paginate(10);

        return view('user.dashboard',['student' => $student]);
    }

    public function create() {
        return view('user.form');
    }

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

    // public function destroy(Student $student, Request $request) {
    //     //$employee = Employee::findOrFail($id);                
    //     // File::delete(public_path().'/uploads/user/'.$employee->image);
    //     $student->delete();        
    //     return redirect()->route('employees.index')->with('success','Employee deleted successfully.');
    // }
}
