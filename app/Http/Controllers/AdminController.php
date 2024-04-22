<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth; // Dodaj na górze pliku

use App\Models\User;

 use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $users = User::all();

        return view('admin', ['tickets' => $tickets, 'users' => $users]);
    }
    public function destroy($id)
{
    $tickets = Ticket::find($id);
    $tickets->delete();

    return redirect('admin');

}



public function deleteUser($id)
{

    if ($id === null) {
        return redirect('admin')->with('error', 'No user selected');
    }
    User::destroy($id);

    // Redirect back to the admin page with a success message
    return redirect('admin');

}

public function selectUser(Request $request)
{
    $selectedUser = User::find($request->user_id);

    $users = User::all();
    return view('admin', ['selectedUser' => $selectedUser, 'users' => $users]);
}


public function deleteTicket($id)
{
    //$ticket = Ticket::find($id);
    // if ($ticket && Auth::user() && (Auth::user()->role == 'admin' || $ticket->user_id == Auth::id())) {
       // $ticket->delete();
       // return redirect()->back()->with('success', 'Bilet został usunięty');
    // } else {
        // return redirect()->back()->with('error', 'Bilet nie został znaleziony lub nie masz uprawnień do jego usunięcia');
    // }


    $ticket = Ticket::find($id);
    dd($ticket);

    if ($ticket) {
        $ticket->delete();
        return redirect()->back()->with('success', 'Ticket deleted successfully');
    }

    return redirect()->back()->with('error', 'Ticket not found');


}


}