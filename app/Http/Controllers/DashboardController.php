<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $submission = FormModel::all();

        return view('internal.dashboard',[
            'pageTitle'=>'Dashboard',
            'submission'=>$submission,
        ]);
    }

    public function create(Request $request){

        $request->validate([

            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
            'name' => 'required',
            'message' => 'required',
        ]);

        if($request->file('image')){

            $image = $request->file('image');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('image', $image_name, 'public');


            $newForm = FormModel::create([
                'name' => $request->name,
                'message' => $request->message,
                'image' => $image_name,
            ]);
        }
        else{

            $newForm = FormModel::create([
                'name' => $request->name,
                'message' => $request->message,
            ]);
        }
        

        if($newForm){
            return back()->with('success', 'Message berhasil ditambahkan!');
        }
        else {
            return back()->with('danger', 'Message gagal ditambahkan!');
        }
    }
}