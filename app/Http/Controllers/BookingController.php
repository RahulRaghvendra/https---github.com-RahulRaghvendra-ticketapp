<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        
        $bookings = DB::table('bookings')
        ->join('events', 'bookings.event_id', '=', 'events.id')
        ->where('bookings.user_id', auth()->id())
        ->select(
            'bookings.id as booking_id',
            'bookings.booked_at',
            'events.name as event_name',
            'events.date as event_date'
        )
        ->orderBy('bookings.booked_at', 'desc')
        ->paginate(10);
     $data=   ['bookings' => $bookings];
        return view('booking.list', $data);
    }

    public function view($id)
    {
        
        $booking = BookingModel::find($id);

        if (!$booking) {
            return redirect()->route('booking_list')->with('error', 'Booking not found.');
        }

        return view('booking.view', ['booking' => $booking]);
    }
}
