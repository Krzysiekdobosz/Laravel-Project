<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth; // Dodaj na górze pliku

class TicketController extends Controller
{
    public function create()
    {
        return view('buy-ticket');
    }
    public function buy()
{
    return view('buy-ticket');
}


public function store(Request $request)
{
    // Walidacja danych
    $request->validate([
        // Zasady walidacji
    ]);

    // Tworzenie biletu
        // Przypisanie wartości do pól modelu Ticket
        $ticket = new Ticket;
        $ticket->user_id = Auth::id();
        $ticket->dance_group = $request->dance_group;
        $ticket->ticket_type = $request->ticket_type;
// Obliczanie daty wygaśnięcia na podstawie typu biletu
if ($request->ticket_type == 'monthly') {
    $ticket->expiry_date = now()->addMonth();
} elseif ($request->ticket_type == 'annual') {
    $ticket->expiry_date = now()->addYear();
} else {
    return redirect()->back()->withErrors(['ticket_type' => 'Invalid ticket type']);  // Obsługa błędu
}

    // Zapisanie biletu
    $ticket->save();

    // Przekierowanie do dashboardu
    return redirect()->route('dashboard');
}
}


