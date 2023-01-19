<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {

        return Reservation::create([
            'first_name' => $request ->first_name,
            'last_name' => $request -> last_name,
            'phone_number'  => $request -> phone_number,
            'email'  => $request -> email,
            'table_number'  => $request -> table_number,
            'reservation_date'  => $request -> reservation_date,
            'user_id' => $request -> user_id
        ]);

    }
    public function fetchData(){
        return Reservation::all();
    }

    public function destroy($id){
        return Reservation::find($id)->delete();
    }

    public function show($id)
    {
        return Reservation::find($id);
    }

    public function update(Request $request, $id){
        return Reservation::find($id)->update([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'phone_number'  => $request -> phone_number,
            'email' => $request -> email,
            'table_number' => $request -> table_number,
            'reservation_date' => $request -> reservation_date
        ]);
    }

}
