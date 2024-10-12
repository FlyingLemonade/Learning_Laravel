<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Movie;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function submitTicket(Request $request)
    {
      
        $validated = $request->validate([
            'movie_id' => 'required|integer|exists:movies,id',
            'customer_name' => 'required|string|max:100',
            'seat_number' => 'required|string|max:5'

        ]);
    
        Ticket::create([
            'movie_id' => $validated['movie_id'],
            'customer_name' => $validated['customer_name'],
            'seat_number' => $validated['seat_number']

        ]);

       
        return redirect()->route('movie')->with('success', 'Ticket ordered successfully!');
    }

    public function checkIn(Ticket $ticket){

        $ticket->update([
            'is_checked_in' => true,  
            'check_in_time' => now()
        ]);
        return redirect()->route('movie');
        
    }

    public function delete(Ticket $ticket){

        if($ticket['is_checked_in'] == false){
            $ticket->delete();
        }
        
        return redirect()->route('movie');
        
    }

}
