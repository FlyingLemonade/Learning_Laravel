<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{


    function showMember()
    {
        $member = Member::class;
        $members = $member::all();

        return view('viewMember', ['members' => $members]);
    }

    function showTickets(Member $member)
    {
        $tickets = $member->tickets()->get();

        return view('memberTicket', ['tickets' => $tickets]);
    }

    function showManage()
    {


        return view('memberManage');
    }

    public function submitMember(Request $request)
    {

        $validated = $request->validate([
            'customer_name' => 'required|string|max:30',
            'birth_date' => 'required|date'
        ]);

        try {
            Member::create([
                'nama' => $validated['customer_name'],
                'tanggal_lahir' => $validated['birth_date']
            ]);

            return response()->json(['success' => true, 'message' => 'Member created']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Member creation failed', 'error' => $e->getMessage()], 500);
        }
    }
}
