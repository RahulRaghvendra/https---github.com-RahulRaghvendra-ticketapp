<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\EventModel;
use App\Models\BookingModel;

class TicketController extends Controller
{
    public function index()
    {
        $events = EventModel::paginate(10);
        //dd($events);
        $data= [
            'events' => $events,
        ];
        return view('ticket.list',$data);
    }
    public function view($id)
    {
        $ticket = EventModel::find($id);
        if (!$ticket) {
            return redirect()->route('ticket_list')->with('error', 'Ticket not found.');
        }
        $data = [
            'ticket' => $ticket,
        ];
        return view('ticket.view', $data);
    }
    public function bookTicket(Request $request)
    {
        $eventId = $request->input('ticket_id');
    
        try {
          
                // Lock the event row for update
                $event = EventModel::where('id', $eventId)->first();
    
                if (!$event) {
                    throw new \Exception('Event not found.');
                }
    
                if ($event->available_seats <= 0) {
                    throw new \Exception('No available seats.');
                }
    
                // Create a new booking
                BookingModel::create([
                    'event_id' => $event->id,
                    'user_id' => auth()->id(), // Ensure the user is authenticated
                    // Add other necessary booking details here
                ]);
    
                // Decrement the available seats
                $event->available_seats -= 1;
                $event->save();
            
    
            return response()->json(['success' => true, 'message' => 'Ticket booked successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
}
