<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;
class TrainController extends Controller
{

    public function index(){

        //$this->fillTrainsTable('italo','bergamo','mestre','2022-05-13 10:00:00','2022-05-13 12:00:00', 376953, 20, 1, 0);

        return view('trains.index');

    }

    public function fillTrainsTable($train_company,$departure_station,$arrival_station,$departure_time,$arrival_time, $train_code, $number_of_carriages, $in_time, $deleted){

        $train = new Train();

        $train->fill([
            'train_company'=> $train_company,
            'departure_station'=> $departure_station,
            'arrival_station'=> $arrival_station,
            'departure_time'=> $departure_time,
            'arrival_time'=> $arrival_time,
            'train_code'=> $train_code,
            'number_of_carriages'=> $number_of_carriages,
            'in_time'=> $in_time,
            'deleted'=> $deleted
        ]);

        $train->save();
    }
}
