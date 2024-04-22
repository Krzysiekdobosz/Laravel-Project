<!-- resources\views\buy-ticket.blade.php -->



<x-app-layout>
<div class="p-6 text-gray-900">
        <!-- Formularz zakupu karnetu -->
        <form action="{{ route('buy-ticket') }}" method="POST">
            @csrf
            <div>
            <label for="dance_group">Grupa taneczna:</label>
    <select id="dance_group" name="dance_group" required>
        <option value="">--Wybierz grupę--</option>
        <option value="poczatkowa">Początkowa</option>
        <option value="kontynuacja">Kontynuacja</option>
        <option value="reprezentacja">Reprezentacja</option>
</select>
            </div>
            <div>
                <label for="type">Typ karnetu:</label>
                <select id="type" name="ticket_type" required>
                    <option value="">--Wybierz typ--</option>
                    <option value="monthly">Miesięczny</option>
                    <option value="annual">Roczny</option>
                </select>
            </div>
            <div>
                <label for="price">Cena:</label>
                <input type="number" id="price" name="price" required readonly>

            <button type="submit">Kup karnet</button>
        </form>
    </div>
    <script src="{{ asset('js/ticketPrice.js') }}"></script>
</x-app-layout>

