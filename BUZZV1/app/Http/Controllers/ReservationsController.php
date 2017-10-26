<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //Fontion permettant d'ouvrir la page des réservations
    public function showReservation()
    {
        return view("reservations.reservation");
    }
}
