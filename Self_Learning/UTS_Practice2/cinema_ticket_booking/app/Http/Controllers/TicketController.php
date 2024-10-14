<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Movie;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function submitTicket(Request $request)
    {

        $validated = $request->validate(Ticket::$rules);
        Ticket::create($validated);
        return response()->json(['success' => true, 'message' => 'Ticket created successfully!']);
    }

    public function checkIn(Ticket $ticket)
    {

        $ticket->update([
            'is_checked_in' => true,
            'check_in_time' => now()
        ]);
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'Checked in successfully']);
        }
    }

    public function delete(Ticket $ticket)
    {

        if ($ticket['is_checked_in'] == false) {
            $ticket->delete();
            if (request()->ajax()) {
                return response()->json(['success' => true, 'message' => 'Ticket deleted successfully']);
            }
        }


        if (request()->ajax()) {
            return response()->json(['success' => false, 'message' => 'Cannot delete a checked-in ticket']);
        }
    }
}
