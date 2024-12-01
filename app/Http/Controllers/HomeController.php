<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){

        $form = FormModel::all();

        return view('home', [
            'form' => $form,
        ]);
    }


}
