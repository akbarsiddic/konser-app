<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $tickets = DB::table('tickets')->get();

        $ticket_type = DB::table('tickets')
            ->select('type')
            ->distinct()
            ->get();

        return view('welcome', ['tickets' => $tickets, 'ticket_type' => $ticket_type]);
    }

    public function see()
    {
        $tickets = DB::table('tickets')->get();

        $ticket_type = DB::table('tickets')
            ->select('type')
            ->distinct()
            ->get();

        return view('dashboard', ['tickets' => $tickets, 'ticket_type' => $ticket_type]);
    }


    
    public function create(Request $request) {
        $ticket = new Ticket();
        $ticket->firstname = $request->firstname;
        $ticket->lastname = $request->lastname;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->quantity = $request->quantity;
        $ticket->type = $request->type;
        $ticket->date = $request->date;
        $ticket->save();
        return redirect('/');
    }

    
    public function edit(Request $request, $id)
    {
        //edit
        DB::table('tickets')
            ->where('id', $id)
            ->update(['firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'email' => $request->email,
                'quantity' => $request->quantity,
                'type' => $request->type,
                'date' => $request->date,
                'updated_at' => now()
            ]);
            
        return redirect('/dashboard');
    }

    /**
     * Update the specified resource in storage.
     */

    //  show value of selected row
    public function update($id)
    {
            $ticket = Ticket::findOrFail($id);
        $ticket_type = DB::table('tickets')
            ->select('type')
            ->distinct()
            ->get();
        return view('edit', ['ticket' => $ticket , 'ticket_type' => $ticket_type]);
    }
    
        
    

    /**
     * Remove the specified resource from storage.
     */
   public function delete($id)
{
    // Find the ticket by its ID and delete it
    Ticket::findOrFail($id)->delete();

    return redirect('/dashboard');
}



    public function checkIn(Request $request)
{
    $ticketId = $request->input('ticket_id');

    // Find the ticket by its ID
    $ticket = Ticket::find($ticketId);

    if (!$ticket) {
        // Ticket not found
        return redirect('/dashboard')->with('error', 'Ticket not found.');
    }

    if ($ticket->status == 'used') {
        // Ticket already used
        return redirect('/dashboard')->with('error', 'Ticket has already been used.');
    }

    // Update the ticket status to "used"
    $ticket->status = 'used';
    $ticket->save();

    return redirect('/dashboard')->with('success', 'Ticket checked in successfully.');
}

    // show data to check
    public function check()
    {
        $tickets = DB::table('tickets')->get();

        $ticket_type = DB::table('tickets')
            ->select('type')
            ->distinct()
            ->get();

        return view('check', ['tickets' => $tickets, 'ticket_type' => $ticket_type]);
    }


}
