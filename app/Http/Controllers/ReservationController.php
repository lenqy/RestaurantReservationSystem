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
}
