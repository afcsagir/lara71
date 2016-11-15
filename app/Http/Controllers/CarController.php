<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function postCreate()
    {
            // Let's grab all data from form.
            $data = Input::all();
            // Add some validation rules to avoid NoName cars etc.
            $rules = array(
                //Pur rules here.
            );
 
            // Input only after $data is valid based on $rules
            $validator = Validator::make($data, $rules);
                if ($validator->passes()) {
                     
                    $input = Input::all();
 
                    $car = new Car();
                    $car->brand = Input::get('brand');
                    $car->model = Input::get('model');
                    $car->garage_id = Input::get('garage_id');                           
                    $car->save();
                     
                    return 'Car saved.';
                }
            return Redirect::to('/');
    }
}
