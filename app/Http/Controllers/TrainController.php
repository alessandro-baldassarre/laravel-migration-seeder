<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;
class TrainController extends Controller
{

    public function index(){


        return view('trains.index',['trains' => Train::paginate(12)]);

    }

    public function show($id){


        return view('trains.show',['train' => Train::findOrFail($id)]);

    }

}
