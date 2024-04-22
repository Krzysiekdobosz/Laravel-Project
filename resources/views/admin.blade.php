<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <a href="{{ route('index') }}">{{ __('Strona głowna') }}</a>        </h2>
          @if(Auth::check() && Auth::user()->role == 'admin')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


    </x-slot>
    <form>
    @csrf
    <select name="user_id">
    @foreach($users as $user)
        @if(Auth::user()->id != $user->id)
            <option value="{{ $user->id }}">
            {{ $user->name }} (ID: {{ $user->id }}, Email: {{ $user->email }}, 
            Data utworzenia konta: {{ $user->created_at }})
            </option>
        @endif
    @endforeach
    </select>
</form>
Wybierz użytkownika, aby sprawdzić jego karnety:
<form action="{{ route('admin.selectUser') }}" method="GET">
    @csrf
    <select name="user_id">
    @foreach($users as $user)
        @if(Auth::user()->id != $user->id)
            <option value="{{ $user->id }}">
            {{ $user->name }} (ID: {{ $user->id }}, Email: {{ $user->email }})
            </option>
        @endif
    @endforeach
    </select>
    <button type="submit">{{ __('Wybierz użytkownika') }}</button>
</form>

@if(isset($selectedUser))
<form >
    @csrf
    <select name="id">
    @foreach($selectedUser->tickets as $ticket)
        <option value="{{ $ticket->id }}">
        {{ $ticket->ticket_type }} (ID: {{ $ticket->id }}, Data ważności: {{ $ticket->expiry_date }}, Data zakupu: {{ $ticket->purchase_date }})
        </option>
    @endforeach
    </select>
</form>
@endif

</x-app-layout>
