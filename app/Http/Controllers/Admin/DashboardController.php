<?php

namespace App\Http\Controllers\Admin;

use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $rooms;

    public function __construct(Room $rooms)
    {
        $this->rooms = $rooms;
    }

    public function index()
    {
        // $rooms = $this->rooms->all()->load('reservation.client');
        // return $rooms;

        $reservations = \App\Reservation::active()
            ->orderBy('checkout')
            ->get();

            // return $reservations;

        return view('admin.dashboard.index', compact('reservations'));
    }
}
