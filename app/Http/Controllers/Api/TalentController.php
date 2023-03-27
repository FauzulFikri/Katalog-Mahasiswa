<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TalentController extends Controller
{
    public function index()
    {
        $talents = Talent::all();
        if($talents->count() > 0){

            return response()->json([
                'students' => $talents
            ], 200);
        }else {

            return response()->json([
                'message' => 'No Records Found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:191',
            'nama_bakat' => 'required|string|max:191'
        ]);

        if($validator->fails()){
            
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }else{

            $talent = Talent::create([
                'kategori' => $request->kategori,
                'nama_bakat' => $request->nama_bakat
            ]);

            if($talent){

                return response()->json([
                    'message' => "Talent Created Successfully"
                ],200);
            }else{

                return response()->json([
                    'message' => "Somethong Went Wrong"
                ],500);
            }
        }
    }

    public function show($id)
    {
        $talent = Talent::find($id);
        if($talent){

            return response()->json([
                'talent' => $talent
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Talent Found!"
            ],404);
        }
    }

    public function edit($id)
    {
        $talent = Talent::find($id);
        if($talent){

            return response()->json([
                'talent' => $talent
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Talent Found!"
            ],404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:191',
            'nama_bakat' => 'required|string|max:191'
        ]);

        if($validator->fails()){
            
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }else{

            $talent = Talent::find($id);
            if($talent){
                
                $talent -> update([
                    'kategori' => $request->kategori,
                    'nama_bakat' => $request->nama_bakat
                ]);

                return response()->json([
                    'message' => "Talent Updated Successfully"
                ],200);
            }else{

                return response()->json([
                    'message' => "No Such Talent Found!"
                ],404);
            }
        }
    }

    public function destroy($id)
    {
        $talent = Talent::find($id);
        if($talent){

            $talent->delete();

            return response()->json([
                'message' => "Talent Deleted Successfully"
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Talent Found!"
            ],404);
        }
    }
}
